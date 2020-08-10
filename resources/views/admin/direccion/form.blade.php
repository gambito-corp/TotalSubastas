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


{{--    <form action="{{is_null($direccion->id)? route('admin.address.store') : route('admin.address.update', ['id'=> $direccion->id])}}" method="Post">--}}
{{--    @csrf @if(!is_null($direccion->id))@method('PUT')@endif--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <div class="form-group">--}}
{{--                    <div class="custom-control">--}}
{{--                        <label for="usuario">Usuario</label>--}}
{{--                        <input type="text" name="usuario" class="form-control  @error('usuario') is-invalid @enderror" placeholder="Nombre del Usuario" value="{{!is_null($direccion->id) ? $direccion->nombre : old('usuario') }}" required autofocus aria-label="Nombre Del Banco" adireccion-describedby="basic-addon1">--}}
{{--                        <select class="form-control  @error('Usuario') is-invalid @enderror" name="Usuario" id="Usuario">--}}
{{--                            <option value="0" selected>---</option>--}}
{{--                            @forelse($usuarios as $user)--}}
{{--                                <option value="{{$user['id']}}">{{$user['name']}}</option>--}}
{{--                            @empty--}}
{{--                                <option>No hay Usuarios Profavor Registra Alguno en la Plataforma</option>--}}
{{--                            @endforelse--}}
{{--                        </select>--}}
{{--                        @error('usuario')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}



{{--                <div class="form-group">--}}
{{--                    <div class="custom-control">--}}
{{--                        <label for="nombre">Nombre</label>--}}
{{--                        <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre del Banco" value="{{!is_null($direccion->id) ? $direccion->nombre : old('nombre') }}" required autofocus aria-label="Nombre Del Banco" adireccion-describedby="basic-addon1">--}}
{{--                        @error('nombre')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}




{{--                <div class="form-group">--}}
{{--                    <div class="custom-control">--}}
{{--                        <label for="siglas">Siglas</label>--}}
{{--                        <input type="text" name="siglas" class="form-control  @error('siglas') is-invalid @enderror" placeholder="Siglas del Banco" value="{{!is_null($direccion->id) ? $direccion->siglas : old('siglas') }}" required autofocus aria-label="Siglas Del Banco" aria-describedby="basic-addon1">--}}
{{--                        @error('siglas')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="">--}}
{{--                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($direccion->id) ? 'Editar':'Crear' }}</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
@endsection

@push('scripts')

@endpush
