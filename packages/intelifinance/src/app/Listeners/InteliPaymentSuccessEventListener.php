<?php

namespace Softwarescares\Intelifinance\app\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Softwarescares\Intelifinance\app\Events\InteliPaymentSuccessEvent;

class InteliPaymentSuccessEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Softwarescares\Intelisafaricomdaraja\app\Providers\InteliPaymentSuccessEvent  $event
     * @return void
     */
    public function handle(InteliPaymentSuccessEvent $event)
    {
        //
    }
}
