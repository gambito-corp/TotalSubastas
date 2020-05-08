@extends('adminlte::page')

@section('title', 'Creacion de Usuario')

@section('content_header')
    @if (request()->routeis('User.edit'))
        <h1>Formulario de Edicion del Usuario {{ $data->name }}</h1>
    @else
        <h1>Formulario de Creacion de Usuario</h1>
    @endif
@stop

@section('content')
    <p>Bienvenido al panel de control de la Pagina Web, esta desarrollado con Admin LTE 3</p>



    <div class="container bg-light py-3">
        @if (request()->routeis('User.edit'))
            <form id="Rol" method="post" action="{{ route('User.update', $data) }}">
                @method('PATCH')
        @else
            <form id="Rol" method="post" action="{{ route('User.store') }}">
        @endif
            @csrf
            <div class="messages">
                @include('includes.sesion')
            </div>
            <div class="controls">

                <div class="form-group">
                    <label for="slug">Rol del USuario</label>
                    <select name="rol_id">
                        @forelse ($roles as $id => $rol)
                            <option value="{{ $id }}">{{ $rol }}</option>
                        @empty
                            <option value="0" disabled>No Existen Roles</option>
                        @endforelse
                    </select>

                    <div class="help-block with-errors">

                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input id="name" type="text" name="name" class="form-control " value="{{ old('name', $data->name) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" class="form-control " value="{{ old('username', $data->username) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control " value="{{ old('email', $data->email) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" type="tel" name="telefono" class="form-control " value="{{ old('telefono', $data->telefono) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" type="text" name="password" class="form-control " value="{{ old('password', $data->password) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirma tu contraseña</label>
                    <input id="password_confirmation" type="text" name="password_confirmation" class="form-control " value="{{ old('password_confirmation', $data->password_confirmation) }}">

                    <div class="help-block with-errors">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-5">
                        @if (request()->routeis('User.edit'))
                            <input type="submit" name="Actualizar" class="btn btn-success btn-send" value="Actualizar Usuario {{ $data->nombre }}">
                        @else
                            <input type="submit" name="crear" class="btn btn-success btn-send" value="Crear Usuario">
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
@stop





