@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($rol->id)? 'Crear' : 'Editar'}} Rol</h1>
@endsection
@push('style')

@endpush
@section('content')
    <form action="{{is_null($rol->id)? route('admin.rol.store') : route('admin.rol.update', ['id'=> $rol->id])}}" method="Post">
    @csrf @if(!is_null($rol->id))@method('PUT')@endif
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control">
                    <label for="name">nombre</label>
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Nombre del Rol" value="{{!is_null($rol->id) ? $rol->name : old('name') }}" required autofocus aria-label="Nombre Del Rol" aria-describedby="basic-addon1">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                 <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($rol->id) ? 'Editar':'Crear' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')

@endpush
