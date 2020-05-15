<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Location
{
    use Serializable;

    protected float $latitude;

    protected float $longitude;

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
