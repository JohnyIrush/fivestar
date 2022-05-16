<?php

namespace Softwarescares\Intelifinance\app\Providers;

use Illuminate\Support\ServiceProvider;

class InteliEventServiceProvider extends ServiceProvider
{


        /**
    * The event listener mappings for the application.
    *
    * @var array
    */
    protected $listen = [
        InteliPaymentEvent::class => [
             InteliPaymentEventListener::class,
            ]

        ];

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
        //
    }
}
