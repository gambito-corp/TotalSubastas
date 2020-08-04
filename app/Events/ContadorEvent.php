<?php

namespace App\Events;

use App\Producto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContadorEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contador;
    public $producto;

    public function __construct(Producto $producto)
    {
        $this->contador = 1;
        $this->producto = $producto;
    }


    public function broadcastOn()
    {
        return new PrivateChannel("contador.{$this->producto->id}");
    }
}
