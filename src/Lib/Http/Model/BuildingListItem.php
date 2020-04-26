<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class BuildingListItem
{
    use Serializable;
    use BuildingTrait;

    /** @var string $orulo_url building URL on Orulo's page */
    public string $orulo_url;

    /** @var Opportunity $opportunity building's available opportunities */
    public Opportunity $opportunity;
}
