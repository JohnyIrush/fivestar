<?php

namespace App\Listeners\Softwarescares\Intelisafaricomdaraja\app\Providers;

use App\Events\Softwarescares\Intelisafaricomdaraja\app\Providers\InteliPaymentSuccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
