<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Video
{
    use Serializable;

    public string $id;

    public string $url;

    /** @var string $source Enum: "youtube" | "vimeo */
    public string $source;

    public string $description;
}
