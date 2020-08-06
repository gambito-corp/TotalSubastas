<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Ranking as Rank;
use Livewire\Component;

class Ranking extends Component
{
    public $resultados;

    public $identificador;

    public function mount($identificador)
    {
        $this->identificador = $identificador;
        $this->resultados = Rank::with('Usuario')->where('producto_id', $this->identificador)->orderBy('cantidad', 'desc')->orderByDesc('updated_at')->take(6)->get()->toArray();

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
