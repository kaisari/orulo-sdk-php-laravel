<?php

namespace Jetimob\Orulo\Facade;

use Illuminate\Support\Facades\Facade;

class Orulo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'orulo';
    }
}