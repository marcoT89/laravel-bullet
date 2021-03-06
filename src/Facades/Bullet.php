<?php

namespace MarcoT89\Bullet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void namespace(string $namespace = null, array $options = [])
 */
class Bullet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-bullet';
    }
}
