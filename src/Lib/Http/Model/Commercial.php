<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Commercial
{
    use Serializable;

    public string $commercial_building;

    public string $warehouse;

    public string $shops;

    public string $land_or_commercial_lots;

    public string $commercial_room;

    public string $commercial_room_with_external_area;
}
