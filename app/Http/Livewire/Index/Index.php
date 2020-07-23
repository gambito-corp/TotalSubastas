<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{
    public $empresas;
    public $picked;
    /**
     * @var Request|mixed
     */
    public $request;

    public function mount()
    {
        $this->picked = true;
        $this->empresas = Company::with('Lotes', 'Productos')->whereHas('Productos', function($query){
                $query->where('finalized_at' , '>', now());
            })->get();
    }
    public function hydrate()
    {
        //
    }

    public function render()
    {
        return view('livewire.index.index');
    }
}
