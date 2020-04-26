<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Model\FloorPlan;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class FloorPlansListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/floorPlans
 */
class FloorPlansListResponse extends Response
{
    /** @var FloorPlan[] $floor_plans */
    protected array $floor_plans;

    public function initComplexObjects()
    {
        $this->deserializeDataArray('floor_plans', FloorPlan::class);
    }
}
