<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Opportunity
{
    use Serializable;

    /** @var bool $broker offer indication for brokers */
    public bool $broker;

    /** @var bool $client offer indication for clients */
    public bool $client;

    /** @var float $client_max_discount maximum percentage of discount in the building's units */
    public float $client_max_discount;

    /** @var bool $exchange_units indicates that the building has a 'dação' */
    public bool $exchange_units;
}
