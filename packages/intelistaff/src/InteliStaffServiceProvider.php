<?php

namespace Softwarescares\Intelistaff;

use Illuminate\Support\ServiceProvider;

class InteliStaffServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'intelistaff'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories

    
        $this->publishes([
            __DIR__.'/resources/js/Pages/Staff' => public_path('../resources/js/Pages/Staff'),
        ], 'intelistaff-ui');

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
        ],'intelistaff-seeders');

        /*
        $this->publishes([
            __DIR__.'/../../public' => public_path('/'),
        ],'assets');
        */
    }
}
