<?php

namespace Softwarescares\Inteliinstaller\app\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DatabaseMigrationCompletedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $database;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($database)
    {
        $this->database = $database;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('database-migration-completed');
    }

    public function broadcastWith()
    {
        return $this->database;
    }

    public function broadcastAs()
    {
        return new Channel('DatabaseMigrationCompletedEvent');
    }
}
