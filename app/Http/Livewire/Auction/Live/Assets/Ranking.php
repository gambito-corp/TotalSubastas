<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Message;
use App\Producto;
use App\Ranking as Rank;
use Livewire\Component;

class Ranking extends Component
{
    public $resultados;

    public $identificador;
    /**
     * @var mixed
     */
    public $producto;

    public function mount($identificador)
    {
        $this->identificador = $identificador;
        $this->producto = Producto::where('id', $this->identificador)->first();
        $this->resultados = Rank::with('Usuario')
            ->where('producto_id', $this->identificador)
            ->where('created_at' ,'>', $this->producto->started_at)
            ->orderByDesc('updated_at')
            ->orderBy('cantidad', 'desc')
            ->take(6)
            ->get()
            ->toArray();

    }

    protected function getListeners()
    {
        return [
            "echo-private:ranking.{$this->identificador},RankingEvent" => 'orden',
        ];
    }

    public function orden($event)
    {
        $this->resultados = $event['ranking'];
    }

    public function foo()
    {
        $id = $this->identificador;
        $resultados = Message::with('Usuario')->where('producto_id', $id)->orderBy('message')->get();
        $this->resultados = $resultados;
    }

    public function render()
    {
        return view('livewire.auction.live.assets.ranking');
    }
}
