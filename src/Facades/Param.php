<?php

namespace Johnylemon\Apidocs\Facades;

use Illuminate\Support\Facades\Facade;

class Param extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Johnylemon\Apidocs\Params\Param::class;
    }
}
