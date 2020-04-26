<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Location
{
    use Serializable;

    public float $latitude;

    public float $longitude;
}
