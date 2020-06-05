<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Facade\Cache;
use Jetimob\Orulo\Facade\Orulo;
use Jetimob\Orulo\Lib\Http\Api\Lists\StateListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\StateListResponse;
use Jetimob\Orulo\Lib\Http\Auth\AuthType;
use Jetimob\Orulo\Lib\Http\Auth\TokenResponse;
use Jetimob\Orulo\Test\TestCase;
use Predis\Response\Status;

class CacheTestCase extends TestCase
{
    private function makeTokenResponse() {
        $response = TokenResponse::build(
            bin2hex(random_bytes(32)),
            'token',
            time() + 3600,
            'all', time(),
            AuthType::ORULO_END_USER_AUTH,
        );

        $response->setStatusCode(200);

        return $response;
    }
    /** @test */
    public function cache_is_accessible()
    {
        $key = 'TEST_K';
        $value = 'TEST_V';

        /** @var Status $status */
        $status = Cache::set($key, $value);
        $this->assertSame('OK', $status->getPayload());
        $this->assertSame($value, Cache::get($key));
        $this->assertSame(1, Cache::del($key));
    }

    /** @test */
    public function instance_can_be_saved()
    {
        /** @var Status $status */
        $status = Cache::set('INSTANCE_T', $this->makeTokenResponse(), 'PX', 500);
        $this->assertEquals('OK', $status->getPayload());
    }

    /** @test */
    public function instance_can_be_retrieved()
    {
        $instanceKey = 'INSTANCE_T';
        $original = $this->makeTokenResponse();
        /** @var Status $status */
        $status = Cache::set($instanceKey, $original->serialize(), 'PX', 2000);
        $this->assertEquals('OK', $status->getPayload());
        $retrieved = Cache::get($instanceKey);
        $this->assertNotEmpty($retrieved);

        $this->assertSame(1, Cache::del($instanceKey));

        $retrievedInstance = new TokenResponse();
        $retrievedInstance->unserialize($retrieved);

        $this->assertEquals($original, $retrievedInstance);
        $this->assertSame($original->getAccessToken(), $retrievedInstance->getAccessToken());
    }

    /** @test */
    public function token_response_is_cached()
    {
        // make a dummy request
        /** @var StateListResponse $response */
        $response = $this->makeAndAssert(StateListRequest::class); // RS; SP
        $this->assertNotEmpty($response->getStates());

        $serializedTokenResponse = Cache::get(Orulo::getCacheKey(
            $this->getClientId(),
            AuthType::ORULO_CLIENT_AUTH,
        ));

        $this->assertNotEmpty($serializedTokenResponse);
        $tokenResponse = new TokenResponse();
        $tokenResponse->unserialize($serializedTokenResponse);
        $this->assertSame(true, $tokenResponse->isValid());
    }

    /** @test */
    public function should_not_have_cached_key()
    {
        Cache::del(Orulo::getCacheKey($this->getClientId(), AuthType::ORULO_CLIENT_AUTH));
        $cached = Orulo::retrieveCached($this->getClientId(), AuthType::ORULO_CLIENT_AUTH);
        $this->assertNull($cached);
    }
}
