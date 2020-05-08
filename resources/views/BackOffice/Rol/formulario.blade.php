@extends('adminlte::page')

@section('title', 'Creacion de Rol')

@section('content_header')
    @if (request()->routeis('rol.edit'))
        <h1>Formulario de Edicion del Rol {{ $data->nombre }}</h1>
    @else
        <h1>Formulario de Creacion de Rol</h1>
    @endif
@stop

@section('content')
    <p>Bienvenido al panel de control de la Pagina Web, esta desarrollado con Admin LTE 3</p>



    <div class="container bg-light py-3">
        @if (request()->routeis('rol.edit'))
            <form id="Rol" method="post" action="{{ route('rol.update', $data) }}">
                @method('PATCH')
        @else
            <form id="Rol" method="post" action="{{ route('rol.store') }}">
        @endif
            @csrf
            <div class="messages">
                @include('includes.sesion')
            </div>
            <div class="controls">
                <div class="row">
                    @if (request()->routeis('rol.edit'))
                        <div class="col-sm-2 offset-2">
                            <div class="form-group">
                                <label for="slug">Ruta del Rol</label>
                                <input id="slug" type="text" name="slug" class="form-control " value="{{ old('slug', $data->slug) }}">

                                <div class="help-block with-errors">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="nombre">Nombre del Rol</label>
                                <input id="nombre" type="text" name="nombre" class="form-control " value="{{ old('nombre', $data->nombre) }}">

                                <div class="help-block with-errors">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <textarea id="descripcion" name="descripcion" class="form-control " rows="3">{{ old('descripcion', $data->descripcion) }}</textarea>

                                <div class="help-block with-errors">

                                </div>
                            </div>
                        </div>

                    @else
                        <div class="col-sm-2 offset-3">
                            <div class="form-group">
                                <label for="nombre">Nombre del Rol</label>
                                <input id="nombre" type="text" name="nombre" class="form-control " value="{{ old('nombre', $data->nombre) }}">

                                <div class="help-block with-errors">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <textarea id="descripcion" name="descripcion" class="form-control " rows="1">{{ old('descripcion', $data->descripcion) }}</textarea>

                                <div class="help-block with-errors">

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-2 offset-5">
                        @if (request()->routeis('rol.edit'))
                            <input type="submit" name="Actualizar" class="btn btn-success btn-send" value="Actualizar Rol {{ $data->nombre }}">
                        @else
                            <input type="submit" name="crear" class="btn btn-success btn-send" value="Crear Rol">
                        @endif
                    </div>
                </div>
                </div>



            <div class="row">
            </div>
        </form>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
@stop





