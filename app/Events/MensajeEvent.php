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

class MensajeEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $producto;
    public $mensaje;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Producto $producto, int $mensaje)
    {
        $this->producto = $producto;
        $this->mensaje = Message::create([
            'user_id' => Auth::id(),
            'producto_id' => $this->producto->id,
            'message' => $mensaje
        ])->load('Usuario');

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('mensaje.'.$this->producto->id);
    }
}
