<?php

declare(strict_types=1);

namespace Slvler\Serpapi\Facades;

use Illuminate\Support\Facades\Facade;

class Serpapi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'serpapi';
    }
}
