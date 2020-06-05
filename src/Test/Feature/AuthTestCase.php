<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Lib\Http\Auth\TokenRequest;
use Jetimob\Orulo\Lib\Http\Auth\TokenResponse;
use Jetimob\Orulo\Test\TestCase;

class AuthTestCase extends TestCase
{
    public function testAuth()
    {
        /** @var TokenResponse $response */
        $response = $this->makeAndAssert(new TokenRequest($this->getClientId(), $this->getSecret()));
        $this->assertInstanceOf(TokenResponse::class, $response);
    }
}
