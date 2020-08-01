<?php

namespace App\Events;

use App\Message;
use App\Producto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ejemplo implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $producto;

    public function __construct($producto)
    {
        $this->producto = $producto;
        $this->producto->precio = $this->producto->puja+$this->producto->precio;
        $this->producto->user_id = Auth::id();
        $mensaje = Message::create([
            'producto_id' => $this->producto->id,
            'user_id' => Auth::id(),
            'message' => $this->producto->precio
        ]);
        $this->producto->update();
    }

    public function broadcastOn()
    {
        return new Channel('canal-ejemplo');
    }
}
