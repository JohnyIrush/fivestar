<?php

namespace Softwarescares\Inteliteam;

use Illuminate\Support\ServiceProvider;

class InteliTeamServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'inteliteam'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories


        $this->publishes([
            __DIR__.'/resources/js/Pages/inteliteam' => public_path('../resources/js/Pages/inteliteam'),
        ], 'inteliteam-ui');

        /*
        $this->mergeConfigFrom(
            __DIR__.'/../../config/safaricomdaraja.php', 'safaricomdaraja'
        );

        $this->publishes([
            __DIR__.'/../../config/safaricomdaraja.php' => config_path('safaricomdaraja.php'),
        ],'safaricomdaraja-config');
        */

        $this->publishes([
            __DIR__.'/database/seeders' => public_path('../database/seeders'),
        ],'inteliteam-seeders'); //seeders

        /*
        $this->publishes([
            __DIR__.'/../../public' => public_path('/'),
        ],'assets');
        */
    }
}
