<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWEndUserAuth;

/**
 * Class BuildingInfoRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#tag/Dados-do-Empreendimento
 */
class BuildingInfoRequest extends GetWEndUserAuth
{
    protected string $buildingId;

    /**
     * BuildingInfoRequest constructor.
     * @param string $buildingId
     */
    public function __construct(string $buildingId)
    {
        parent::__construct();
        $this->buildingId = $buildingId;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}';
    }
}
