<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Building
{
    use Serializable;

    protected string $id;

    protected string $name;

    protected Developer $developer;

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
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return Developer
     */
    public function getDeveloper(): ?Developer
    {
        return $this->developer ?? null;
    }
}
