<?php

namespace Jetimob\Orulo\Lib\Http\Api;

use Jetimob\Orulo\Lib\Http\Auth\AuthType;

abstract class GetWClientAuth extends GetRequest
{
    public function authType(): ?int
    {
        return AuthType::ORULO_CLIENT_AUTH;
    }
}