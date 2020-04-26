<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Building
{
    use Serializable;

    public string $id;

    public string $name;

    public Developer $developer;
}
