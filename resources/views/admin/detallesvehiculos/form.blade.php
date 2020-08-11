@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($pais->id)? 'Crear' : 'Editar'}} {{--Modelo--}}</h1>
@endsection
@section('content')
    {{--Formulario--}}
@endsection
@push('scripts')
    {{--scripts--}}
@endpush
