<?php

namespace testpackages2\packagepractice;

use Illuminate\Support\ServiceProvider;

class Myprovider2 extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__. '/routes.php';
        $this->loadViewsFrom(__DIR__. '/Views','myview1');
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
