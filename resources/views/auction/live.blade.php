@extends('layouts.app')
@section('content')
    @livewire('subastas.live.index', ['data' => $data])
@endsection
