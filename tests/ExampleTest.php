<?php

namespace Shaneoliver\LaravelFormComponents\Tests;

use Orchestra\Testbench\TestCase;
use Shaneoliver\LaravelFormComponents\LaravelFormComponentsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelFormComponentsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
