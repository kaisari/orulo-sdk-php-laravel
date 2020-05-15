<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class FloorPlanBase
{
    use Serializable;

    protected string $id;

    protected string $description;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }
}
