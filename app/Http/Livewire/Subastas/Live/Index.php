<?php

namespace App\Http\Livewire\Subastas\Live;

use Livewire\Component;

class Index extends Component
{
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.subastas.live.index');
    }
}
