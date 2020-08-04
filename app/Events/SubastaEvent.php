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

        if($this->producto->user_id != Auth::id() || $this->producto->finalized_at <= now()->subSecond()) {
            DB::transaction(function () {
                $this->mensaje = Message::create([
                    'producto_id' => $this->producto->id,
                    'user_id' => Auth::id(),
                    'message' => intval($this->producto->puja + $this->producto->precio),
                ]);

                $this->producto->user_id = Auth::id();
                $this->producto->precio = $this->mensaje->message;
                if ($this->producto->finalized_at->sub(2, 'Minutes') <= now()) {
                    $this->producto->finalized_at = now()->addSeconds(20);
                }
                $this->producto->update();
            });
        }
        $this->mensaje =  Message::with('Usuario')->where('producto_id', $this->producto->id)->get();
    }


    public function broadcastOn()
    {
        return new PrivateChannel('subasta.'.$this->producto->id);
    }
}
