<?php

namespace TestPackages\Mypackages;

use Illuminate\Support\ServiceProvider;

class Mycustompackage extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__. '/routes.php';
        $this->loadViewsFrom(__DIR__. '/Views','myview');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
