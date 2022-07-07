<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Softwarescares\Intelifinance\app\Events\InteliPaymentSuccessEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionResultEvent;
use Softwarescares\Intelisafaricomdaraja\app\Models\MpesaExpressTransaction;

class MPesaExpressTransactionResultEventListener
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
    public function handle(MPesaExpressTransactionResultEvent $event)
    {
        if($event->result["Body"]["stkCallback"]["ResultCode"] == '0')
        {
            event(new InteliPaymentSuccessEvent());
        }

        MpesaExpressTransaction::create(
            [
                "MerchantRequestID" => $event->result["Body"]["stkCallback"]["MerchantRequestID"],
                "CheckoutRequestID" => $event->result["Body"]["stkCallback"]["CheckoutRequestID"],
                "ResultCode" => $event->result["Body"]["stkCallback"]["ResultCode"],
                "ResultDesc" => $event->result["Body"]["stkCallback"]["ResultDesc"],
                "Amount" =>   isset($event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"])? $event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"] : null,
                "MpesaReceiptNumber" => isset($event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"])? $event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"] : null,
                "TransactionDate" => isset($event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Value"])? $event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Value"]: null,
                "PhoneNumber" => isset($event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"])? $event->result["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"] : null,
                'order_id' => 1
            ]
        );
    }
}
