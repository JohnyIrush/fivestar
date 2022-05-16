<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Softwarescares\Intelisafaricomdaraja\app\Events\CustomerToBusinessTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionReversalEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionUpdateReversalEvent;
use Softwarescares\Intelisafaricomdaraja\app\Models\BusinessToCustomerTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\CustomerToBusinessTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\MpesaExpressTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\TransactionReversal;

class TransactionUpdateReversalEventListener
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
    public function handle(TransactionUpdateReversalEvent $event)
    {
       Log::info("CustomerToBusinessTransactionEventListener");
       Log::info(json_encode($event));
       if ($event->result["transaction_type"] == "c2b") {

        $transaction = CustomerToBusinessTransaction::find($event->result["transaction_id"]);
        $transaction->transaction_reversal_id = TransactionReversal::latest()->first()->id;
        $transaction->Reversed = 'true';
        $transaction->update();

       } else if($event->result["transaction_type"] == "b2c")
       {

        $transaction =BusinessToCustomerTransaction::find($event->result["transaction_id"]);
        $transaction->transaction_reversal_id = TransactionReversal::latest()->first()->id;
        $transaction->Reversed = 'true';
        $transaction->update();

       } else if ($event->result["transaction_type"] == "c2b-express") {
        $transaction = MpesaExpressTransaction::find($event->result["transaction_id"]);
        $transaction->transaction_reversal_id = TransactionReversal::latest()->first()->id;
        $transaction->Reversed = 'true';
        $transaction->update();
       }
    }
}
