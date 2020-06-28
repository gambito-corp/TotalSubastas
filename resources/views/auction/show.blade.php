@extends('layouts.app')
@section('content')
    @livewire('auctions.show', ['id' => $id])
@endsection
