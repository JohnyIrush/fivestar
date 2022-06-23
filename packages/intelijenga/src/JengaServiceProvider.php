<?php

namespace Softwarescares\Intelijenga;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class JengaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //$this->loadRoutesFrom(__DIR__.'/../../routes/web.php'); //-- web routes
        //$this->loadRoutesFrom(__DIR__.'/../../routes/api.php'); //-- api routes
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'jenga'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations'); //-- migrations
/*
        $this->publishes([
            __DIR__.'/../../resources/js/Pages/inteli_jenga' => public_path('../resources/js/Pages/inteli_jenga'),
        ], 'intelijenga-ui');

        $this->mergeConfigFrom(
            __DIR__.'/../../config/jenga.php', 'jenga'
        );

        $this->publishes([
            __DIR__.'/../../config/jenga.php' => config_path('jenga.php'),
        ],'jenga-config');
        */


    }
}
