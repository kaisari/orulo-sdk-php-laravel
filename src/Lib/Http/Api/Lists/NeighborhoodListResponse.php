<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class NeighborhoodListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/addresses
 */
class NeighborhoodListResponse extends Response
{
    protected array $areas;

    /**
     * @return array
     */
    public function getAreas(): array
    {
        return $this->areas;
    }

    public function initComplexObjects()
    {
        $this->areas = $this->data->areas;
    }
}
