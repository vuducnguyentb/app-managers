<?php

namespace App\Events;

use App\Models\account;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class test
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // public $name; //khai báo tên cần truyền vào event
    public $name;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, account $user)
    {
        // $this->name = $name; // gán name của event bằng tham số name truyền vào
        $this->name = $name;
        $this->user = $user; // sử dụng model account trong db để lấy dữ liệu
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
