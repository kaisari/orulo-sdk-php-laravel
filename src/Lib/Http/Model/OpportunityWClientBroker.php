<?php

namespace Jetimob\Orulo\Lib\Http\Model;

class OpportunityWClientBroker extends Opportunity
{
    /** @var string $broker_description offer description for the broker */
    protected string $broker_description;

    /** @var string $broker_expiration_date string <date> DD/MM/YYYY */
    protected string $broker_expiration_date;

    /** @var string $client_description offer description for the client */
    protected string $client_description;

    /** @var string $client_expiration_date string <date> DD/MM/YYYY */
    protected string $client_expiration_date;

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
