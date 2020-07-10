@extends('layouts.app')
@section('content')
<div class="container">
    @livewire('subastas.show.index')
</div>
<div class="container pr-md-0">
    <div class="row">
        @include('auction.assets.cajaAside')
        <div class="col-md-9 order-md-1 pl-0">
            <div class="row main-container ">
                @include('auction.assets.cajaCaracteristica')
            </div><!-- row main container -->
            <div class="row ">
                @include('auction.assets.cajaDescargas')
            </div>
        </div>
    </div>
    <div class="container">
        @include('auction.assets.cajaDetalle')
    </div>
</div>
@include('auction.assets.cajaJumbo')
@include('auction.assets.cajaReferidos')
    
@endsection
