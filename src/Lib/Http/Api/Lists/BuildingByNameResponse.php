<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Model\Building;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class BuildingByNameResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/buildingNameSearch
 */
class BuildingByNameResponse extends Response
{
    protected array $buildings;

    public function initComplexObjects()
    {
        $this->buildings = !empty($this->data->buildings) ? Building::deserializeArray($this->data->buildings) : [];
    }

    /**
     * @return array
     */
    public function getBuildings(): array
    {
        return $this->buildings;
    }
}
