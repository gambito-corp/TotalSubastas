@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($pais->id)? 'Crear' : 'Editar'}} Pais/Modelo</h1>
@endsection
@push('style')


@endpush
@section('content')
    @if($vista=='create')
        @livewire('admin.form.paises.create')
    @else

        @livewire('admin.form.paises.update', ['pais' => $pais, 'paises' => $paises])
    @endif
@endsection

@push('scripts')


@endpush
