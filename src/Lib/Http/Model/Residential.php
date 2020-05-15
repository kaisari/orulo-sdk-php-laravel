<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Residential
{
    use Serializable;

    protected string $apartments;

    protected string $house;

    protected string $condominium_house;

    protected string $penthouse_duplex;

    protected string $penthouse;

    protected string $duplex;

    protected string $farm;

    protected string $garden;

    protected string $loft;

    protected string $land_or_residential_lots;

    protected string $triplex;

    protected string $studio;

    /**
     * @return string
     */
    public function getApartments(): ?string
    {
        return $this->apartments ?? null;
    }

    /**
     * @return string
     */
    public function getHouse(): ?string
    {
        return $this->house ?? null;
    }

    /**
     * @return string
     */
    public function getCondominiumHouse(): ?string
    {
        return $this->condominium_house ?? null;
    }

    /**
     * @return string
     */
    public function getPenthouseDuplex(): ?string
    {
        return $this->penthouse_duplex ?? null;
    }

    /**
     * @return string
     */
    public function getPenthouse(): ?string
    {
        return $this->penthouse ?? null;
    }

    /**
     * @return string
     */
    public function getDuplex(): ?string
    {
        return $this->duplex ?? null;
    }

    /**
     * @return string
     */
    public function getFarm(): ?string
    {
        return $this->farm ?? null;
    }

    /**
     * @return string
     */
    public function getGarden(): ?string
    {
        return $this->garden ?? null;
    }

    /**
     * @return string
     */
    public function getLoft(): ?string
    {
        return $this->loft ?? null;
    }

    /**
     * @return string
     */
    public function getLandOrResidentialLots(): ?string
    {
        return $this->land_or_residential_lots ?? null;
    }

    /**
     * @return string
     */
    public function getTriplex(): ?string
    {
        return $this->triplex ?? null;
    }

    /**
     * @return string
     */
    public function getStudio(): ?string
    {
        return $this->studio ?? null;
    }
}
