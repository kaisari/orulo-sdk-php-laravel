<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Commercial
{
    use Serializable;

    protected string $commercial_building;

    protected string $warehouse;

    protected string $shops;

    protected string $land_or_commercial_lots;

    protected string $commercial_room;

    protected string $commercial_room_with_external_area;

    /**
     * @return string
     */
    public function getCommercialBuilding(): ?string
    {
        return $this->commercial_building ?? null;
    }

    /**
     * @return string
     */
    public function getWarehouse(): ?string
    {
        return $this->warehouse ?? null;
    }

    /**
     * @return string
     */
    public function getShops(): ?string
    {
        return $this->shops ?? null;
    }

    /**
     * @return string
     */
    public function getLandOrCommercialLots(): ?string
    {
        return $this->land_or_commercial_lots ?? null;
    }

    /**
     * @return string
     */
    public function getCommercialRoom(): ?string
    {
        return $this->commercial_room ?? null;
    }

    /**
     * @return string
     */
    public function getCommercialRoomWithExternalArea(): ?string
    {
        return $this->commercial_room_with_external_area ?? null;
    }
}
