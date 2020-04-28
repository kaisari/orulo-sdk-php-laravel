<?php

namespace Jetimob\Orulo\Lib\Http\Api;

use Jetimob\Orulo\Lib\Http\Auth\AuthType;

abstract class GetWEndUserAuth extends GetRequest
{
    public function authType(): ?int
    {
        return AuthType::ORULO_END_USER_AUTH;
    }
}