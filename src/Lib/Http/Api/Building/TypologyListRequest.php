<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class TypologyListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/typologies
 */
class TypologyListRequest extends GetWClientAuth
{
    protected string $buildingId;

    /**
     * TypologyListRequest constructor.
     * @param string $buildingId
     */
    public function __construct(string $buildingId)
    {
        parent::__construct();
        $this->buildingId = $buildingId;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}/typologies';
    }

    /**
     * @return string
     */
    public function getBuildingId(): string
    {
        return $this->buildingId;
    }
}