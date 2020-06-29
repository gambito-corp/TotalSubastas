@extends('layouts.app')
@section('content')
    @livewire('auctions.live', ['data' => $data])
@endsection
