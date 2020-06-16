<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class FloorPlansListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/floorPlans
 */
class FloorPlansListRequest extends GetWClientAuth
{
    protected string $buildingId;

    /** @var string[] $dimensions Enum: "200x140" | "520x280" | "1024x1024" */
    protected array $dimensions;

    protected array $bodySchema = ['dimensions'];

    /**
     * FloorPlansListRequest constructor.
     * @param string $buildingId
     * @param string[] $dimensions
     */
    public function __construct(string $buildingId, array $dimensions)
    {
        parent::__construct();
        $this->buildingId = $buildingId;
        $this->dimensions = $dimensions;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}/floor_plans';
    }

    /**
     * @return string
     */
    public function getBuildingId(): string
    {
        return $this->buildingId;
    }

    /**
     * @return string[]
     */
    public function getDimensions(): array
    {
        return $this->dimensions;
    }
}
