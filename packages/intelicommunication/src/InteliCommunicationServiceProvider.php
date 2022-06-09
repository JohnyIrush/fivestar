<?php

namespace Softwarescares\Intelicommunication;

use Illuminate\Support\ServiceProvider;

class InteliCommunicationServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'intelicommunication'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories


        $this->publishes([
            __DIR__.'/resources/js/Pages/inteli_communication' => public_path('../resources/js/Pages/inteli_communication'),
        ], 'intelicommunication-ui');


        $this->publishes([
            __DIR__.'/database/seeders' => public_path('../database/seeders'),
        ],'intelicommunication-seeders');

    }
}
