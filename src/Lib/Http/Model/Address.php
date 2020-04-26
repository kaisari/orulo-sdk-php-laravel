<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Address
{
    use Serializable;

    public string $street_type;

    public string $street;

    public int $number;

    public string $area;

    public string $city;

    public string $state;

    public string $zip_code;

    public float $latitude;

    public float $longitude;
}
