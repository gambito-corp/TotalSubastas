@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($direccion->id)? 'Crear' : 'Editar'}} Direccion</h1>
@endsection
@push('style')

@endpush
@section('content')
    @if($vista=='create')
        @livewire('admin.form.direcciones.create')
    @else
        @livewire('admin.form.direcciones.update', ['direccion' => $direccion])
    @endif
@endsection

@push('scripts')

@endpush
