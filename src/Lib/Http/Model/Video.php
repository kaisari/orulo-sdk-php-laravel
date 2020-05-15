<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Video
{
    use Serializable;

    protected string $id;

    protected string $url;

    /** @var string $source Enum: "youtube" | "vimeo */
    protected string $source;

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
    public function getUrl(): ?string
    {
        return $this->url ?? null;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source ?? null;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }
}
