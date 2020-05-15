<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class CommercialContact
{
    use Serializable;

    /** @var string $id commercial contact id */
    protected string $id;

    /** @var Partner $partner commercial partner */
    protected Partner $partner;

    /** @var string $name commercial contact name */
    protected string $name;

    /** @var float $rating commercial contact rating */
    protected float $rating;

    /** @var int $total_ratings total commercial contact ratings */
    protected int $total_ratings;

    /** @var float $real_state_agency_comission commission percentage for the real estate */
    protected float $real_state_agency_comission;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }

    /**
     * @return Partner
     */
    public function getPartner(): ?Partner
    {
        return $this->partner ?? null;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return float
     */
    public function getRating(): ?float
    {
        return $this->rating ?? null;
    }

    /**
     * @return int
     */
    public function getTotalRatings(): ?int
    {
        return $this->total_ratings ?? null;
    }

    /**
     * @return float
     */
    public function getRealStateAgencyComission(): ?float
    {
        return $this->real_state_agency_comission ?? null;
    }
}
