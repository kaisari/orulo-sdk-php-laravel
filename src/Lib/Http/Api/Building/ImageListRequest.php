<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class ImageListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/images
 */
class ImageListRequest extends GetWClientAuth
{
    protected string $buildingId;

    /** @var string[] $dimensions Enum: "200x140" | "520x280" | "1024x1024" */
    protected array $dimensions;

    /**
     * ImageListRequest constructor.
     * @param string $buildingBuildingId
     * @param string[] $dimensions
     */
    public function __construct(string $buildingBuildingId, array $dimensions)
    {
        parent::__construct();
        $this->buildingId = $buildingBuildingId;
        $this->dimensions = $dimensions;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}/images';
    }
}
