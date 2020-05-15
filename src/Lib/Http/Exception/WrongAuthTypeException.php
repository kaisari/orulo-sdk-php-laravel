<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

use Jetimob\Orulo\Lib\Http\Auth\AuthType;

/**
 * Class WrongAuthTypeException
 *
 * The TokenResponse stored is not of the expected type.
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class WrongAuthTypeException extends HttpException
{
    public function __construct(int $expected, int $cached)
    {
        parent::__construct(sprintf(
            'expected a token request authenticated to %s, and the cached is authenticated to %s',
            AuthType::TO_STR[$expected],
            AuthType::TO_STR[$cached],
        ));
    }
}
