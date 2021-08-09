@extends('layouts.app')
@section('content')
<div class="container">
    @livewire('subastas.show.index')
</div>
<div class="container">
    <div class="row">
        @include('auction.assets.cajaAside', ['producto' => $producto, 'resultados' => $resultados])
    </div>
    <div class="col-md-9 order-md-1">
        <div class="row main-container ">
            @include('auction.assets.cajaCaracteristica')
        </div><!-- row main container -->
    </div>
</div>
<div class="container">
        <div class="row">
            @include('auction.assets.cajaDetalle')
        </div>
    <div class="container">
        <div class="row">
            @include('auction.assets.cajaDescargas', ['documentos' => $documentos])
        </div>
    </div>
@endsection


