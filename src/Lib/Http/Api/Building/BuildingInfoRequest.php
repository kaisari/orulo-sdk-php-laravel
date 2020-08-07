<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetRequest;
use Jetimob\Orulo\Lib\Http\Auth\AuthType;

/**
 * Class BuildingInfoRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#tag/Dados-do-Empreendimento
 */
class BuildingInfoRequest extends GetRequest
{
    protected string $buildingId;

    protected int $authType;

    /**
     * BuildingInfoRequest constructor.
     * @param string $buildingId
     * @param int $authType
     */
    public function __construct(string $buildingId, int $authType = AuthType::ORULO_CLIENT_AUTH)
    {
        parent::__construct();
        $this->buildingId = $buildingId;
        $this->authType = $authType;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}';
    }

    public function authType(): ?int
    {
        return $this->authType;
    }
}
