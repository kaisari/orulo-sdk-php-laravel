<?php

namespace Jetimob\Orulo\Lib\Http\Model;

trait BuildingTrait
{
    /** @var string $id building id */
    public string $id;

    /** @var string $name building name */
    public string $name;

    /** @var Developer $developer 'incorporadora' */
    public Developer $developer;

    public Address $address;

    /** @var float $min_price minimum value of a building's unit */
    public float $min_price;

    public float $price_per_private_square_meter;

    /** @var int $min_bathrooms minimum number of bathrooms of all available units */
    public int $min_bathrooms;

    /** @var int $max_bathrooms maximum number of bathrooms of all available units */
    public int $max_bathrooms;

    /** @var int $min_area lowest area value among all available units */
    public int $min_area;

    /** @var int highest area value among all available units */
    public int $max_area;

    /** @var int $min_bedrooms minimum number of bedrooms among all available units */
    public int $min_bedrooms;

    /** @var int $max_bedrooms maximum number of bedrooms among all available units */
    public int $max_bedrooms;

    /** @var int $min_suites minimum number of suites among all available units */
    public int $min_suites;

    /** @var int $max_suites maximum number of suites among all available units */
    public int $max_suites;

    /** @var int $min_parking minimum number of parking spots among all available units */
    public int $min_parking;

    /** @var int $max_parking maximum number of parking spots among all available units */
    public int $max_parking;

    /** @var string $description property description */
    public string $description;

    /** @var string $finality Enum: Comercial | Misto | Residencial */
    public string $finality;

    public DefaultImage $default_image;

    /** @var string $updated_at <date-time> (DD/MM/AAAA HH:MM:SS) of the building's last update */
    public string $updated_at;
}
