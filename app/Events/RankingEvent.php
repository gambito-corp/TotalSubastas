<?php

namespace App\Events;

use App\Producto;
use App\Ranking;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RankingEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $producto;
    public $ranking;

    public function __construct(Producto $producto)
    {
        $this->producto = $producto;
        $this->ranking = Ranking::updateOrCreate([
            'producto_id' => $this->producto->id,
            'user_id' => Auth::id()
        ],
            [
                'cantidad' => \DB::raw('cantidad + 1')
            ]
        );
        $this->ranking = Ranking::with('Usuario')->where('producto_id', $this->producto->id)->orderBy('cantidad', 'desc')->take(6)->get();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('ranking.'.$this->producto->id);
    }
}
