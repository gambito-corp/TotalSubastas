<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Message;
use Livewire\Component;

class Ranking extends Component
{
    public $resultados;

    public $contador;

    public $identificador;



    public function mount($identificador)
    {
        $this->identificador = $identificador;
        $this->resultados = Message::with('Usuario')->where('producto_id', $this->identificador)->orderBy('message')->get();
        $this->contador = 1;
    }

    protected function getListeners()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'orden',
        ];
    }

    public function orden()
    {
        $id = $this->identificador;
        $resultados = Message::with('Usuario')->where('producto_id', $id)->orderBy('message')->get();
        $this->resultados = $resultados;
        $this->emitSelf('foo');
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
