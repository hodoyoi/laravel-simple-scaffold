<?php

namespace Hodoyoi\LaravelSimpleScaffold;

use Illuminate\Support\ServiceProvider;

class SimpleScaffoldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('simple.scaffold.controller', function ($app) {
            return new ControllerMakeCommand($app['files']);
        });

        $this->commands([
            'simple.scaffold.controller'
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
