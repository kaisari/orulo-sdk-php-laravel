<?php

namespace Jetimob\Orulo\Lib\Http\Model;

class OpportunityWClientBroker extends Opportunity
{
    /** @var string $broker_description offer description for the broker */
    public string $broker_description;

    /** @var string $broker_expiration_date string <date> DD/MM/YYYY */
    public string $broker_expiration_date;

    /** @var string $client_description offer description for the client */
    public string $client_description;

    /** @var string $client_expiration_date string <date> DD/MM/YYYY */
    public string $client_expiration_date;
}
