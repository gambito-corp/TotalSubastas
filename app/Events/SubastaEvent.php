<?php

namespace App\Events;

use App\Message;
use App\Producto;
use App\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubastaEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $mensaje;
    public $producto;


    public function __construct(Producto $producto)
    {
        $this->user = Auth::user();
        $this->producto = $producto;
//        dd($this->producto);
//
        if($this->producto->user_id != Auth::id() || now()->addSecond()->toTimeString() <= $this->producto->finalized_at->toTimeString()) {
                $this->producto->user_id = Auth::id();
                $this->producto->precio = intval($this->producto->precio+ $this->producto->puja);
                if ($this->producto->finalized_at->subSeconds(60) <= now()) {
                    $this->producto->finalized_at = now()->addSeconds(9);
                }
                $this->producto->update();
        }
    }


    public function broadcastOn()
    {
        return new PrivateChannel('subasta.'.$this->producto->id);
    }
}
