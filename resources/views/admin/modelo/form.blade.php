@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($modelo->id)? 'Crear' : 'Editar'}} Modelo</h1>
@endsection
@push('style')

@endpush
@section('content')
    <form action="{{is_null($modelo->id)? route('admin.modelos.store') : route('admin.modelos.update', ['modelo'=> $modelo])}}" method="Post">
    @csrf @if(!is_null($modelo->id))@method('PUT')@endif
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control">
                    <label for="nombre">Marca</label>
                    <select name="marca_id" class="form-control  @error('marca') is-invalid @enderror"  required>
                        @foreach($marcas as $marca)
                        <option value="{{$marca->id}}"{{$marca->id == $modelo->marca_id ? 'selected':''}}>{{$marca->nombre}}</option>
                        @endforeach

                    </select>
                    @error('marca_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control">
                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre del Modelo" value="{{!is_null($modelo->id) ? $modelo->nombre : old('nombre') }}" required autocomplete="nombre" autofocus aria-label="Nombre De Modelo" aria-describedby="basic-addon1">
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                 <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($modelo->id) ? 'Editar':'Crear' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')

@endpush
