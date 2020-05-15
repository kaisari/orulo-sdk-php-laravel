<?php

namespace Jetimob\Orulo\Lib\Http\Model;

class Image extends ImageBase
{
    protected string $_200x140;

    protected string $_520x280;

    protected string $_1024x1024;

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

    /**
     * @return string
     */
    public function get1024x1024(): ?string
    {
        return $this->_1024x1024 ?? null;
    }
}
