<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Opportunity
{
    use Serializable;

    /** @var bool $broker offer indication for brokers */
    protected bool $broker;

    /** @var bool $client offer indication for clients */
    protected bool $client;

    /** @var float $client_max_discount maximum percentage of discount in the building's units */
    protected float $client_max_discount;

    /** @var bool $exchange_units indicates that the building has a 'dação' */
    protected bool $exchange_units;

    /**
     * @return bool
     */
    public function isBroker(): ?bool
    {
        return $this->broker ?? null;
    }

    /**
     * @return bool
     */
    public function isClient(): ?bool
    {
        return $this->client ?? null;
    }

    /**
     * @return float
     */
    public function getClientMaxDiscount(): ?float
    {
        return $this->client_max_discount ?? null;
    }

    /**
     * @return bool
     */
    public function isExchangeUnits(): ?bool
    {
        return $this->exchange_units ?? null;
    }
}
