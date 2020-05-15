<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

use Jetimob\Orulo\Lib\Http\Auth\AuthType;

/**
 * Class MissingCodeException
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class MissingCodeException extends HttpException
{
    public function __construct()
    {
        parent::__construct(sprintf(
            '\'code\' MUST not be empty to an authentication of type %s',
            AuthType::TO_STR[AuthType::ORULO_END_USER_AUTH],
        ));
    }
}