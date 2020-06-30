@extends('layouts.app')
@section('content')
    @livewire('subastas.show.index', ['id' => $id])
@endsection
