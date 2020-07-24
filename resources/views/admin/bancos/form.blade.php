@extends('layouts.admin')
@section('title')
@section('header')
    <h1 class="m-0 text-dark">{{is_null($banco->id)? 'Crear' : 'Editar'}} Banco</h1>
@endsection
@push('style')

@endpush
@section('content')
    <form action="{{is_null($banco->id)? route('admin.bancos.store') : route('admin.bancos.update', ['id'=> $banco->id])}}" method="Post">
    @csrf @if(!is_null($banco->id))@method('PUT')@endif
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre del Banco" value="{{!is_null($banco->id) ? $banco->nombre : old('nombre') }}" required autofocus aria-label="Nombre Del Banco" aria-describedby="basic-addon1">
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control">
                    <label for="siglas">Siglas</label>
                    <input type="text" name="siglas" class="form-control  @error('siglas') is-invalid @enderror" placeholder="Siglas del Banco" value="{{!is_null($banco->id) ? $banco->siglas : old('siglas') }}" required autofocus aria-label="Siglas Del Banco" aria-describedby="basic-addon1">
                    @error('siglas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                 <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($banco->id) ? 'Editar':'Crear' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')

@endpush
