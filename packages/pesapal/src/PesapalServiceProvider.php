<?php

namespace Lipagateways\Pesapal;

use Illuminate\Support\ServiceProvider;

class InteliAiServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'pesapal'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories


        $this->publishes([
            __DIR__.'/resources/js/Pages/pesapal' => public_path('../resources/js/Pages/pesapal'),
        ], 'pesapal');


        $this->publishes([
            __DIR__.'/database/seeders' => public_path('../database/seeders'),
        ],'pesapal');

    }
}
