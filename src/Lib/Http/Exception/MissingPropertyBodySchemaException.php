<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

/**
 * Class MissingPropertyBodySchemaException
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class MissingPropertyBodySchemaException extends HttpException
{
    public function __construct(string $property, $instance)
    {
        parent::__construct(
            sprintf(
                'missing property \'%s\' declared in $bodySchema of %s',
                $property,
                get_class($instance)
            )
        );
    }
}
