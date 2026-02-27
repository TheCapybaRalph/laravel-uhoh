<?php

namespace TheCapybaRalph\LaravelUhoh\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool run() - Run integrity check
 * @see \TheCapybaRalph\LaravelUhoh\Uhoh
 */
class Uhoh extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TheCapybaRalph\LaravelUhoh\Uhoh::class;
    }
}
