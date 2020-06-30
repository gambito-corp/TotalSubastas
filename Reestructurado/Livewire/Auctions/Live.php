<?php

namespace App\Http\Livewire\Auctions;

use Livewire\Component;

class Live extends Component
{
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }
    public function render()
    {
        return view('livewire.auctions.live');
    }
}
