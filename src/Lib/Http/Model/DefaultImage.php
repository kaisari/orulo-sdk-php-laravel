<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class DefaultImage
{
    use Serializable;

    /** @var string $id image id */
    protected string $id;

    /** @var string $description image description */
    protected string $description;

    /** @var string $_200x140 url of an image with maximum size of 200x140 */
    protected string $_200x140;

    /** @var string $_520x280 url of an image with maximum size of 520x280 */
    protected string $_520x280;

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

    /**
     * @return string
     */
    public function get200x140(): ?string
    {
        return $this->_200x140 ?? null;
    }

    /**
     * @return string
     */
    public function get520x280(): ?string
    {
        return $this->_520x280 ?? null;
    }
}
