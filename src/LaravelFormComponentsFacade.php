<?php

namespace Shaneoliver\LaravelFormComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shaneoliver\LaravelFormComponents\Skeleton\SkeletonClass
 */
class LaravelFormComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-form-components';
    }
}