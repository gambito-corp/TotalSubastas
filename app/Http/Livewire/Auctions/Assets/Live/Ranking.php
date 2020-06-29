<?php

namespace App\Http\Livewire\Auctions\Assets\Live;

use Livewire\Component;

class Ranking extends Component
{

    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.auctions.assets.live.ranking');
    }
}
