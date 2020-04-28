<?php

namespace Jetimob\Orulo\Lib\Http\Auth;

abstract class AuthType
{
    public const ORULO_CLIENT_AUTH   = 1 << 0;
    public const ORULO_END_USER_AUTH = 1 << 1;
}