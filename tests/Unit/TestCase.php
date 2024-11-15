<?php

namespace Slvler\Serpapi\Tests\Unit;

use Slvler\Serpapi\SerpapiServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SerpapiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}