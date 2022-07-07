<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MPesaExpressTransactionResultEvent implements ShouldQueue, ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $result;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($result)
    {
        $this->result = $result;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('mpesa-express-transaction-result');
    }

    public function broadcastAs()
    {
        return 'MPesaExpressTransactionResultEvent';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */

    public function broadcastWith()
    {
        return [
            "MerchantRequestID" => $this->result["Body"]["stkCallback"]["MerchantRequestID"],
            "CheckoutRequestID" => $this->result["Body"]["stkCallback"]["CheckoutRequestID"],
            "ResultCode" => $this->result["Body"]["stkCallback"]["ResultCode"],
            "ResultDesc" => $this->result["Body"]["stkCallback"]["ResultDesc"],
        ];
    }
}
