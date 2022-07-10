<?php

namespace Softwarescares\Inteliinstaller\app\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Softwarescares\Inteliinstaller\app\Events\DatabaseMigrationCompletedEvent;

class DatabaseMigrationCompletedEventListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(DatabaseMigrationCompletedEvent $event)
    {
        //
    }
}
