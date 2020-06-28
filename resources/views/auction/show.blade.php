@extends('layouts.app')
@section('content')
    @dump(Request())
    @livewire('auctions.show')
@endsection
