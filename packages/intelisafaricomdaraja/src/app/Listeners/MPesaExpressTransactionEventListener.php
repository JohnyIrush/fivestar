<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Models\BusinessToCustomerTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\MpesaExpressTransaction;

class MPesaExpressTransactionEventListener
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
    public function handle(MPesaExpressTransactionEvent $event)
    {

    }


}
