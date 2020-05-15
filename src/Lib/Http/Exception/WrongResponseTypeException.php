<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

/**
 * Class WrongResponseTypeException
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class WrongResponseTypeException extends HttpException
{
    public function __construct(string $request)
    {
        parent::__construct(sprintf(
            'the response class defined in %s MUST implement Jetimob\Orulo\Lib\Http\Response class',
            $request,
        ));
    }
}
