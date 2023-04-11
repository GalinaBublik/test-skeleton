<?php

namespace TestSkeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \\TestSkeleton\TestSkeleton
 */
class TestSkeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TestSkeleton\TestSkeleton::class;
    }
}
