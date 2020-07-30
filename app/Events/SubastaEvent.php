<?php

namespace App\Events;

use App\Producto;
use App\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SubastaEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $message;
    public $producto;


    public function __construct(Producto $producto, User $user, $message)
    {
        $this->producto = $producto;
        $this->user = $user;
        $this->message = $message;
    }


    public function broadcastOn()
    {
        Log::debug("{$this->user->name}: {$this->message}: {$this->producto->precio}");
        return new PresenceChannel('subasta');
    }
}
