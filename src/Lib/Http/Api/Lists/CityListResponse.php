<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class CityListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/listCities
 */
class CityListResponse extends Response
{
    protected array $cities;

    /**
     * @return array
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    public function initComplexObjects()
    {
        $this->cities = $this->data->cities;
    }
}
