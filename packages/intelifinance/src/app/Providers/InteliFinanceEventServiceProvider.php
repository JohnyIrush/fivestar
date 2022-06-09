<?php

namespace Softwarescares\Intelifinance\app\Providers;

use Illuminate\Support\ServiceProvider;

use Softwarescares\Intelifinance\app\Events\InteliPaymentEvent;
use Softwarescares\Intelifinance\app\Listeners\InteliPaymentEventListener;

class InteliFinanceEventServiceProvider extends ServiceProvider
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
