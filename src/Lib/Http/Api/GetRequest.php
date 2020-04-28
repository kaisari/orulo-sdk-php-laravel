<?php

namespace Jetimob\Orulo\Lib\Http\Api;

use Jetimob\Orulo\Lib\Http\Method;
use Jetimob\Orulo\Lib\Http\Request;

abstract class GetRequest extends Request
{
    public function method(): string
    {
        return Method::GET;
    }
}
