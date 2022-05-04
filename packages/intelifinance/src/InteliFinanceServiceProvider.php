<?php

namespace Softwarescares\InteliFinance;

use Illuminate\Support\ServiceProvider;

class InteliFinanceServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'intelifinance'); //-- Package views
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //-- migrations
        $this->loadFactoriesFrom(__DIR__.'/database/migrations/factories'); //-- factories


        $this->publishes([
            __DIR__.'/resources/js/Pages/inteli_finance' => public_path('../resources/js/Pages/inteli_finance'),
        ], 'intelifinance-ui');

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
        ],'intelifinance-seeders'); //seeders

        /*
        $this->publishes([
            __DIR__.'/../../public' => public_path('/'),
        ],'assets');
        */
    }
}
