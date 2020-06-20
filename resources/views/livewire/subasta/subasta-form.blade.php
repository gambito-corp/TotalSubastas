@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Subasta Online de {{$producto->producto}} cuesta {{$producto->precio}} soles
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row p-2">
                                <div class="col-4">
                                    <div class="container-fluid">
                                        <div class="row text-left">
                                            <div class="col-12">
                                                <p class="h5">Usuarios Conectados</p>
                                                <ul id="users" class="list-unstyled overflow-auto" style="height: 22vh">

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul id="messages" class="list-unstyled overflow-auto" style="height: 45vh">
                                                    @foreach($mensajes as $mensaje)
                                                        @livewire('subasta.mensajes', ['mensaje' => $mensaje])
                                                    @endforeach
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-12">
                                    <form action="#" wire:submit.prevent="Pujar({{$puja}})">
                                        <button> Pujar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
