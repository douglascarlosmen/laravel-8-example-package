<?php

namespace DouglasMen\ExamplePackage;

use Illuminate\Support\ServiceProvider;

class ExamplePackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'example-package');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {

    }
}
