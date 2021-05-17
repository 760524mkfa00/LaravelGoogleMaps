<?php

namespace 760524mkfa00\LaravelGoogleMaps;

use Illuminate\Support\Facades\Facade;

/**
 * @see \760524mkfa00\LaravelGoogleMaps\Skeleton\SkeletonClass
 */
class LaravelGoogleMapsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelgooglemaps';
    }
}
