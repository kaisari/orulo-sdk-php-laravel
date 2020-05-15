<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

/**
 * Class WrongRequestTypeException
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class WrongRequestTypeException extends HttpException
{
    public function __construct()
    {
        parent::__construct('a request MUST implement Jetimob\Orulo\Lib\Http\Request class');
    }
}
