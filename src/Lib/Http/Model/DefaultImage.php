<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class DefaultImage
{
    use Serializable;

    /** @var string $id image id */
    public string $id;

    /** @var string $description image description */
    public string $description;

    /** @var string $_200x140 url of an image with maximum size of 200x140 */
    public string $_200x140;

    /** @var string $_520x280 url of an image with maximum size of 520x280 */
    public string $_520x280;
}
