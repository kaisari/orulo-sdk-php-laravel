<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Lib\Http\Api\Building\BuildingInfoRequest;
use Jetimob\Orulo\Lib\Http\Api\Building\BuildingInfoResponse;
use Jetimob\Orulo\Test\TestCase;

class BuildingInfoTestCase extends TestCase
{
    public function testInfoRequest()
    {
        /** @var BuildingInfoResponse $response */
        $response = $this->makeAndAssert(new BuildingInfoRequest('7391'));
        $this->assertNotEmpty($response->getTypologies());
        $this->assertNotNull($response->getDeveloper());
    }
}
