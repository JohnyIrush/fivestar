<?php

namespace Softwarescares\Inteliinstaller\app\Listeners;

use App\Events\Softwarescares\Intelisafaricomdaraja\app\Providers\MPesaExpressTransactionResultEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Softwarescares\Inteliinstaller\app\Events\SchoolAcountCreatedEvent;

class SchoolAcountCreatedEventListener
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
     * @param  \App\Events\Softwarescares\Intelisafaricomdaraja\app\Providers\MPesaExpressTransactionResultEvent  $event
     * @return void
     */
    public function handle(SchoolAcountCreatedEvent $event)
    {
        //
    }
}
