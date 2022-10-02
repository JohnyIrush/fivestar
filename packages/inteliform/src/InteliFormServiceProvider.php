<?php

namespace Softwarescares\Inteliform;

use Illuminate\Support\ServiceProvider;

class InteliFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php'); //-- web routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php'); //-- api routes
        $this->loadViewsFrom(__DIR__.'/resources/views', 'inteliform'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories

    
        $this->publishes([
            __DIR__.'/resources/js/Pages/inteli_form' => public_path('../resources/js/Pages/inteli_form'),
        ], 'inteliform-ui');

        $this->publishes([
            __DIR__.'/database/seeders' => public_path('../database/seeders'),
        ],'inteliform-seeders'); //seeders
    }
}
