@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($marca->id)? 'Crear' : 'Editar'}} Marca/Modelo</h1>
@endsection
@push('style')

@endpush
@section('content')
{{--    {{dd($marca->parent_id)}}--}}
    <form action="{{is_null($marca->id)? route('admin.marcas.store') : route('admin.marcas.update', ['id'=> $marca->id])}}" method="Post">
    @csrf @if(!is_null($marca->id))@method('PUT')@endif
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control">
                    <label for="name">Marca</label>
                        <select class="form-control  @error('parent_id') is-invalid @enderror" name="parent_id">
                            <option value="0">Selecciona una marca para el modelo</option>
                            @forelse($marcas as $parent)
                                <option value="{{$parent->id}}" {{$marca->parent_id == $parent->id? 'selected':old('parent_id')}}>{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Marcas Crea una</option>
                            @endforelse
                        </select>
                    @error('parent_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre del Marca/Modelo" value="{{!is_null($marca->id) ? $marca->nombre : old('nombre') }}" required autofocus aria-label="Nombre Del Marca/Modelo" aria-describedby="basic-addon1">
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                 <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($marca->id) ? 'Editar':'Crear' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')

@endpush
