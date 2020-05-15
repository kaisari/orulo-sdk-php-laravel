<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

/**
 * Class AuthorizationException
 *
 * Exception thrown when we can't retrieve an access_token in the SDK's current state.
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class AuthorizationException extends HttpException
{
    public function __construct()
    {
        parent::__construct('can\'t retrieve an access_token in the SDK\'s current state');
    }
}
