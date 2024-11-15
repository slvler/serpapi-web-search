<?php

namespace Slvler\Serpapi\Tests\Feature;

use Slvler\Serpapi\Facades\Serpapi;
use Slvler\Serpapi\Tests\Unit\TestCase;

class SerpapiTest extends TestCase
{
    public function test_getData()
    {
        $this->assertIsArray(Serpapi::search(['q' => "bitcoin"])->result());
    }
}