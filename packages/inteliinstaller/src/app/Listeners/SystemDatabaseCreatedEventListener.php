<?php

namespace Softwarescares\Inteliinstaller\app\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Softwarescares\Inteliinstaller\app\Events\SchoolAdminRegisteredEvent;
use Softwarescares\Inteliinstaller\app\Events\SystemDatabaseCreatedEvent;

class SystemDatabaseCreatedEventListener
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
    public function handle(SystemDatabaseCreatedEvent $event)
    {
        //
    }
}
