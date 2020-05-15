<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class BuildingListItem
{
    use Serializable;
    use BuildingTrait;

    /** @var string $orulo_url building URL on Orulo's page */
    protected string $orulo_url;

    /** @var Opportunity $opportunity building's available opportunities */
    protected Opportunity $opportunity;

    /**
     * @return string
     */
    public function getOruloUrl(): ?string
    {
        return $this->orulo_url ?? null;
    }

    /**
     * @return Opportunity
     */
    public function getOpportunity(): ?Opportunity
    {
        return $this->opportunity ?? null;
    }
}
