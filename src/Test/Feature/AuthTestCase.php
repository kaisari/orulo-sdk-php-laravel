<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Facade\Orulo;
use Jetimob\Orulo\Lib\Http\Auth\TokenRequest;
use Jetimob\Orulo\Lib\Http\Auth\TokenResponse;
use Jetimob\Orulo\Test\TestCase;

class AuthTestCase extends TestCase
{
    public function testAuth()
    {
        /** @var TokenResponse $response */
        $response = Orulo::request(new TokenRequest(
            Orulo::getConfig('client_id'),
            Orulo::getConfig('client_secret'))
        );

        $this->assertResponse($response);
    }
}
