<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Lib\Http\Api\Lists\BuildingListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\BuildingListResponse;
use Jetimob\Orulo\Lib\Http\Api\Lists\BuildingTypeListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\BuildingTypeListResponse;
use Jetimob\Orulo\Lib\Http\Api\Lists\CityListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\CityListResponse;
use Jetimob\Orulo\Lib\Http\Api\Lists\NeighborhoodListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\NeighborhoodListResponse;
use Jetimob\Orulo\Lib\Http\Api\Lists\PartnerListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\StateListRequest;
use Jetimob\Orulo\Lib\Http\Api\Lists\StateListResponse;
use Jetimob\Orulo\Test\TestCase;

class ListTestCase extends TestCase
{
    public function testStateList()
    {
        /** @var StateListResponse $response */
        $response = $this->makeAndAssert(StateListRequest::class); // RS; SP
        $this->assertNotEmpty($response->getStates());
    }

    public function testCityList()
    {
        /** @var CityListResponse $response */
        $response = $this->makeAndAssert(new CityListRequest('RS')); // RS: Cachoeirinha; Esteio
        $this->assertNotEmpty($response->getCities());
    }

    public function testNeighborhoodList()
    {
        /** @var NeighborhoodListResponse $response */
        $response = $this->makeAndAssert(new NeighborhoodListRequest('RS', 'Cachoeirinha'));
        $this->assertNotEmpty($response->getAreas());
    }

    public function testBuildingTypeList()
    {
        /** @var BuildingTypeListResponse $response */
        $response = $this->makeAndAssert(BuildingTypeListRequest::class);
        $this->assertNotEmpty($response->getCommercial());
        $this->assertNotEmpty($response->getResidential());
        $this->assertNotEmpty($response->getCommercial()->commercial_building);
        $this->assertNotEmpty($response->getResidential()->land_or_residential_lots);
    }

    public function testPartnerList()
    {
        $this->makeAndAssert(new PartnerListRequest(
            'Cachoeirinha',
            'RS',
        ));
    }

    public function testBuildingListRequest()
    {
        $request = new BuildingListRequest();
        $request->setState('SP');

        /** @var BuildingListResponse $response */
        $response = $this->makeAndAssert($request);
        $this->assertEquals(BuildingListResponse::class, $request->getResponseClass());
        $this->assertNotEmpty($response->getBuildings());
    }
}
