<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Softwarescares\Intelisafaricomdaraja\app\Events\BusinessToCustomerTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Models\BusinessToCustomerTransaction;

class AccountBalanceTransactionEventListener
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
    public function handle(AccountBalanceTransactionEventListener $event)
    {

    }
}
