<?php

namespace hosseinkhodadadeh\laravelusers;

use Illuminate\Support\Facades\Facade;

class LaravelUsersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelusers';
    }
}
