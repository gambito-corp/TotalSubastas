@extends('layouts.app')
@section('content')
<div class="container">
    @php
        $UserId = auth()->id();
    @endphp
    @dump($UserId)
    @livewire('subastas.live.index')
</div>
@endsection
