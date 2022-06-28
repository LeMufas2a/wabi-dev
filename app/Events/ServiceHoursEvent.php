<?php

namespace App\Events;

use App\Hours;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ServiceHoursEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $hour;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Hours $hour)
    {
        $this->hour = $hour;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
    }
}
