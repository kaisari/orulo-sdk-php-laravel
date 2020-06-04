<?php

namespace Jetimob\Orulo\Facade;

use Illuminate\Support\Facades\Facade;

class Cache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Orulo\Cache';
    }
}