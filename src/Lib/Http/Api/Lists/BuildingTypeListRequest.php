<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetRequest;

/**
 * Class UnitListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/types
 */
class BuildingTypeListRequest extends GetRequest
{
    protected function urn(): string
    {
        return 'buildings/types/list';
    }
}
