@extends('BackOffice.page')
@section('title-pre', 'TotalSubastas')

@if (request()->routeis('rol.create'))
    @section('title', '- Crear Rol')
@else  
    @section('title', '- Actualiza el Rol '.$data->nombre)
@endif

@section('css')
@section('fuentes')

@if (request()->routeis('rol.create'))
    @section('content_header', 'Creemos un Rol')
@else  
    @section('content_header', 'Actualiza el Rol '.$data->nombre)
@endif

@if (request()->routeis('rol.create'))
    @section('BreadCrumbs', 'Rol / Crear')
@else  
    @section('BreadCrumbs', 'Rol / Crear / '.$data->nombre)
@endif
@section('contenido')
    <h2>
        rellena los campos del formulario
    </h2>
    <!-- general form elements disabled -->
    <div class="card card-info col-md-8 mx-auto">
        <div class="card-header">
            <h3 class="card-title">{{ request()->routeis('rol.create') ? 'Crea Tu Propio Rol' : 'Actualiza el Rol '.$data->nombre }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form" method="POST" action="{{ request()->routeis('rol.create') ? route('rol.store') : route('rol.update', ['rol' => $data->id]) }}">
                @if (request()->routeis('rol.edit')) @method('PATCH') @endif
                @csrf
                <div class="row">
                    @if (request()->routeis('rol.edit'))
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="slug">
                               @error('slug')<i class="far fa-times-circle"></i>@enderror
                                Ruta del Rol
                            </label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug', $data->slug) }}">
                            
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    @endif

                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="nombre">
                               @error('nombre')<i class="far fa-times-circle"></i>@enderror
                                Nombre del Rol
                            </label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre', $data->nombre) }}">
                            
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>

                    <div class="col-md-4 mx-auto">
                        <!-- textarea -->
                        <div class="form-group">
                            <label class="col-form-label" for="descripcion">
                                @error('descripcion')<i class="far fa-times-circle"></i>@enderror
                                Descripcion del Rol
                            </label>
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" rows="1" name="descripcion">{{ old('descripcion', $data->descripcion) }}</textarea>
                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mx-auto">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="crear" value="{{ request()->routeis('rol.create') ? 'Crear Rol' : 'Actualiza El Rol' }}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- general form elements disabled -->
@endsection




@section('plugins')
@section('js')
