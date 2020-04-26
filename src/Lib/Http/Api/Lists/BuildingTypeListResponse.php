<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Model\Commercial;
use Jetimob\Orulo\Lib\Http\Model\Residential;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class UnitListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/types
 */
class BuildingTypeListResponse extends Response
{
    protected Commercial $commercial;

    protected Residential $residential;

    public function initComplexObjects()
    {
        $this->commercial = Commercial::deserialize($this->data->commercial);
        $this->residential = Residential::deserialize($this->data->residential);
    }

    /**
     * @return Commercial
     */
    public function getCommercial(): Commercial
    {
        return $this->commercial;
    }

    /**
     * @return Residential
     */
    public function getResidential(): Residential
    {
        return $this->residential;
    }
}
