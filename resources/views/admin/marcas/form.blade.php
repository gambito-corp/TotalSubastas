@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">Añadir Marca</h1>
@endsection
@push('style')

@endpush
@section('content')
    <form action="{{$marca ? route('admin.marcas.update', ['marca' => $marca]) : route('admin.marcas.store')}}" method="Post">
    @csrf @if($marca)@method('PUT')@endif
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control">
                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre de la Marca" value="{{$marca? $marca->nombre : old('nombre') }}" required autocomplete="nombre" autofocus aria-label="Nombre De Marca" aria-describedby="basic-addon1">
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                 <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{$marca? 'Editar':'Crear' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')

@endpush
