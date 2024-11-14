<?php

declare(strict_types=1);

namespace Slvler\Serpapi;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Slvler\Serpapi\Services\Serpapi;

class SerpapiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/serpapi.php', 'serpapi');

        $this->app->singleton('serpapi', function (Container $app) {
            return new Serpapi($app);
        });
    }
    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/serpapi.php' => config_path('serpapi.php'),
        ], 'serpapi');
    }
}
