<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Address
{
    use Serializable;

    protected string $street_type;

    protected string $street;

    protected int $number;

    protected string $area;

    protected string $city;

    protected string $state;

    protected string $zip_code;

    protected float $latitude;

    protected float $longitude;

    /**
     * @return string
     */
    public function getStreetType(): ?string
    {
        return $this->street_type ?? null;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street ?? null;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number ?? null;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area ?? null;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city ?? null;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state ?? null;
    }

    /**
     * @return string
     */
    public function getZipCode(): ?string
    {
        return $this->zip_code ?? null;
    }

    /**
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude ?? null;
    }

    /**
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude ?? null;
    }
}
