<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class CommercialContact
{
    use Serializable;

    /** @var string $id commercial contact id */
    public string $id;

    /** @var Partner $partner commercial partner */
    public Partner $partner;

    /** @var string $name commercial contact name */
    public string $name;

    /** @var float $rating commercial contact rating */
    public float $rating;

    /** @var int $total_ratings total commercial contact ratings */
    public int $total_ratings;

    /** @var float $real_state_agency_comission commission percentage for the real estate */
    public float $real_state_agency_comission;
}
