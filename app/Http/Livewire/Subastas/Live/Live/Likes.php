<?php

namespace App\Http\Livewire\Subastas\Live\Live;

use Livewire\Component;

class Likes extends Component
{
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.subastas.live.live.likes');
    }
}
