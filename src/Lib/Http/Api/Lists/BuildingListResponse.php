<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Model\BuildingListItem;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class BuildingListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/buildings
 */
class BuildingListResponse extends Response
{
    /** @var BuildingListItem[] $buildings */
    protected array $buildings;

    /** @var int $total total number of results */
    protected int $total;

    /** @var int $page current page */
    protected int $page;

    /** @var int $total_pages total number of available pages */
    protected int $total_pages;

    public function initComplexObjects()
    {
        $this->buildings = !empty($this->data->buildings)
            ? BuildingListItem::deserializeArray($this->data->buildings)
            : [];
    }

    /**
     * @return array
     */
    public function getBuildings(): array
    {
        return $this->buildings;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->total_pages;
    }
}
