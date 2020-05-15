<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;
use Jetimob\Orulo\Lib\Http\Model\Location;

/**
 * Class BuildingListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/buildings
 */
class BuildingListRequest extends GetWClientAuth
{
    protected string $city;

    protected string $state;

    protected string $developer_id;

    protected string $commercial_partner_id;

    protected string $updated_after;

    protected Location $current_location;

    protected int $location_radius;

    protected string $page = "1";

    protected string $results_per_page = "10";

    protected array $bodySchema = ['city', 'state', 'developer_id', 'commercial_partner_id', 'updated_after', 'current_location', 'location_radius', 'page', 'results_per_page'];

    public function urn(): string
    {
        return 'buildings';
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getDeveloperId(): string
    {
        return $this->developer_id;
    }

    /**
     * @return string
     */
    public function getCommercialPartnerId(): string
    {
        return $this->commercial_partner_id;
    }

    /**
     * @return string
     */
    public function getUpdatedAfter(): string
    {
        return $this->updated_after;
    }

    /**
     * @return Location
     */
    public function getCurrentLocation(): Location
    {
        return $this->current_location;
    }

    /**
     * @return int
     */
    public function getLocationRadius(): int
    {
        return $this->location_radius;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return string
     */
    public function getResultsPerPage(): string
    {
        return $this->results_per_page;
    }

    /**
     * @param string $city
     * @return BuildingListRequest
     */
    public function setCity(string $city): BuildingListRequest
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $state
     * @return BuildingListRequest
     */
    public function setState(string $state): BuildingListRequest
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @param string $developer_id
     * @return BuildingListRequest
     */
    public function setDeveloperId(string $developer_id): BuildingListRequest
    {
        $this->developer_id = $developer_id;
        return $this;
    }

    /**
     * @param string $commercial_partner_id
     * @return BuildingListRequest
     */
    public function setCommercialPartnerId(string $commercial_partner_id): BuildingListRequest
    {
        $this->commercial_partner_id = $commercial_partner_id;
        return $this;
    }

    /**
     * @param string $updated_after
     * @return BuildingListRequest
     */
    public function setUpdatedAfter(string $updated_after): BuildingListRequest
    {
        $this->updated_after = $updated_after;
        return $this;
    }

    /**
     * @param Location $current_location
     * @return BuildingListRequest
     */
    public function setCurrentLocation(Location $current_location): BuildingListRequest
    {
        $this->current_location = $current_location;
        return $this;
    }

    /**
     * @param int $location_radius
     * @return BuildingListRequest
     */
    public function setLocationRadius(int $location_radius): BuildingListRequest
    {
        $this->location_radius = $location_radius;
        return $this;
    }

    /**
     * @param string $page
     * @return BuildingListRequest
     */
    public function setPage(string $page): BuildingListRequest
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param string $results_per_page
     * @return BuildingListRequest
     */
    public function setResultsPerPage(string $results_per_page): BuildingListRequest
    {
        $this->results_per_page = $results_per_page;
        return $this;
    }

}
