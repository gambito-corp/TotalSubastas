@extends('adminlte::page')

@section('title', 'Creacion de Accesos')

@section('content_header')
    @if (request()->routeis('Acceso.edit'))
        <h1>Formulario de Edicion del Acceso</h1>
    @else
        <h1>Formulario de Creacion de Acceso</h1>
    @endif
@stop

@section('content')
    <p>Bienvenido al panel de control de la Pagina Web, esta desarrollado con Admin LTE 3</p>


    <div class="container bg-light py-3">


        <form action="{{ request()->routeis('Acceso.edit') ? route('Acceso.update', ['acceso' => $data]) : route('Acceso.store') }}" method="post" >
            @if (request()->routeis('Acceso.edit'))
                @method('PATCH')
            @endif
            @csrf
            @include('includes.sesion')
                {{-- {{ dd($data->rol_id) }} --}}

                <div class="form-group">
                    <select name="rol_id" class="custom-select {{ $errors->has('rol_id') ? 'is-invalid' : '' }}" size="1">
                        @forelse ($roles as $id => $rol)
                            <option value="{{ $id }}" {{ $data->rol_id==$id ? 'selected' : '' }}>{{ $rol }}</option>
                        @empty
                            <option value="0" disabled>No Existen Roles</option>
                        @endforelse
                    </select>
                    <div class="help-block with-errors">
                        @if ($errors->has('rol_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('rol_id') }}
                        </div>
                        @endif
                    </div>
                    {{-- {{ dd($data->autorizacion_id) }} --}}
                    <select name="autorizacion_id" class="custom-select {{ $errors->has('autorizacion_id') ? 'is-invalid' : '' }}">
                        @forelse ($roles as $id => $rol)
                            <option value="{{ $id }}" {{ $data->autorizacion_id==$id ? 'selected' : '' }}>{{ $rol }}</option>
                        @empty
                            <option value="0" disabled>No Existen Autorizacion</option>
                        @endforelse
                    </select>
                    <div class="help-block with-errors">
                        @if ($errors->has('autorizacion_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('autorizacion_id') }}
                        </div>
                        @endif
                    </div>
                </div>

                @forelse ($permisos as $id => $auto)
                    <div class="form-check form-check-inline">
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    {{-- {{ dd($todo) }} --}}

                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $id }}" {{ ($todo[$id-1]==$id) ? 'checked ' : '' }} >
                        <label class="form-check-label" for="inlineCheckbox1">{{ $auto }}</label>

                    </div>
                @empty
                    <div class="form-check form-check-inline">
                        <div class="invalid-feedback">Example invalid feedback text</div>
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ null }}">
                        <label class="form-check-label" for="inlineCheckbox1">null</label>
                    </div>
                @endforelse
                <pre>

                </pre>




            <div class="col-md-6">


            </div>


            </form>
            <div class="controls">
                {{-- {{ dd($roles) }} --}}
                <div class="row">

{{--


                </div>
                <div class="row">
                    <div class="col-md-2 offset-5">
                        @if (request()->routeis('Acceso.edit'))
                            <input type="submit" name="Actualizar" class="btn btn-success btn-send" value="Actualizar Acceso">
                        @else
                            <input type="submit" name="crear" class="btn btn-success btn-send" value="Crear acceso">
                        @endif
                    </div>
                </div>
                </div>



            <div class="row">
            </div> --}}
        </form>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
@stop





