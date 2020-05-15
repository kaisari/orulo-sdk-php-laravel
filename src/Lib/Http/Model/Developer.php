<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Developer
{
    use Serializable;

    protected string $id;

    protected string $name;

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
}
