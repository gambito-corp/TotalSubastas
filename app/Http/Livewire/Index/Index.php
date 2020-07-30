<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        Cache::put('hola', 'Hola mundo');
        $this->picked = true;
        $productosClosure = function ($query)
        {
            $query->where('finalized_at', '>', now())
                ->with('Lote');
        };
        $lotesClosure = function ($query) use ($productosClosure)
        {
            $query->whereHas('Productos', $productosClosure)->with([
                'Productos' => $productosClosure
            ]);
        };
        $this->empresas =  Company::whereHas('Productos', $productosClosure)
            ->with(['Productos' => $productosClosure])
            ->whereHas('Lotes', $lotesClosure)->with(['Lotes' => $lotesClosure])
            ->get();

        if (Cache::has('hola')){
            dd(Cache::get('hola'));
        }else{
            dd('nel prro');
        }

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
