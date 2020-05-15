<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class PartnerSummary
{
    use Serializable;

    protected string $id;

    protected string $name;

    /** @var string $updated_at <date-time> DD/MM/YYYY HH:MM:SS */
    protected string $updated_at;

    /** @var string $logo url */
    protected string $logo;

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
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at ?? null;
    }

    /**
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo ?? null;
    }
}
