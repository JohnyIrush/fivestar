<?php

namespace Softwarescares\Inteliacademic;

use Illuminate\Support\ServiceProvider;

class InteliAcademicServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'inteliacademic'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories

    
        $this->publishes([
            __DIR__.'/resources/js/Pages/inteli_academic' => public_path('../resources/js/Pages/inteli_academic'),
        ], 'inteliacademic-ui');

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
        ],'inteliacademic-seeders'); //seeders

        /*
        $this->publishes([
            __DIR__.'/../../public' => public_path('/'),
        ],'assets');
        */
    }
}
