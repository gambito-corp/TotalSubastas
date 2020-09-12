@extends('layouts.app')
@section('content')
<div class="container pr-0 pl-0">
    @livewire('subastas.show.index')
</div>
<div class="container">
    <div class="row margin-row">
        @include('auction.assets.cajaAside', ['producto' => $producto, 'resultados' => $resultados])
    </div>
    <div class="col-md-9 order-md-1">
        <div class="row main-container ">
            @include('auction.assets.cajaCaracteristica')
        </div><!-- row main container -->
        <div class="row ">
            @include('auction.assets.cajaDescargas')
        </div>
    </div>
    <div class="container">
        @include('auction.assets.cajaDetalle')
    </div>
</div>
@include('auction.assets.cajaJumbo')
@include('auction.assets.cajaReferidos')

@endsection


