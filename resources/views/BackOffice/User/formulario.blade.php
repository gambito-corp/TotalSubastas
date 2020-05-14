@extends('BackOffice.page')
@section('title-pre', 'TotalSubastas')

@if (request()->routeis('User.create'))
    @section('title', '- Crear Usuario')
@else  
    @section('title', '- Actualiza el Usuario '.$data->nombre)
@endif

@section('css')
@section('fuentes')

@if (request()->routeis('User.create'))
    @section('content_header', 'Creemos un Usuario')
@else  
    @section('content_header', 'Actualiza el Usuario '.$data->nombre)
@endif

@if (request()->routeis('User.create'))
    @section('BreadCrumbs', 'USuarios / Crear')
@else  
    @section('BreadCrumbs', 'Usuarios / Crear / '.$data->nombre)
@endif
@section('contenido')
    <h2>
        rellena los campos del formulario
    </h2>
    <!-- general form elements disabled -->
    <div class="card card-info col-md-8 mx-auto">
        <div class="card-header">
            <h3 class="card-title">{{ request()->routeis('User.create') ? 'Crea Tu Propio USuario' : 'Actualiza el Usuario '.$data->nombre }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form 
            role="form" 
            method="POST" 
            action="{{ request()->routeis('User.create') ? route('User.store') : route('User.update', ['user' => $data->id]) }}">
                @if (request()->routeis('User.edit')) @method('PATCH') @endif
                @csrf
                <div class="row">                    
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                                  
                            <label class="col-form-label" for="rol_id">
                               @error('rol_id')<i class="far fa-times-circle"></i>@enderror                              
                                Rol
                            </label>
                            <select name="rol_id" id="rol_id" class="form-control @error('rol_id') is-invalid @enderror select2" data-placeholder="Selecciona un Rol">                                                                                                        
                                @forelse ($roles as $rol)
                                    <option 
                                    value="{{ $rol->id }}"
                                    {{ old('rol_id', $rol->id) == $rol->id ? 'selected': '' }}>{{ $rol->nombre }}</option>
                                @empty
                                    
                                @endforelse
                            </select>                                                                            
                            @error('rol_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                    </div>

                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="name">
                               @error('name')<i class="far fa-times-circle"></i>@enderror
                                Nombres
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $data->name) }}">
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="username">
                               @error('username')<i class="far fa-times-circle"></i>@enderror
                               User Name
                            </label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $data->username) }}">
                            
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>

                    
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="email">
                               @error('email')<i class="far fa-times-circle"></i>@enderror
                                Email
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $data->email) }}">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>

                    
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="telefono">
                               @error('telefono')<i class="far fa-times-circle"></i>@enderror
                                Telefono
                            </label>
                            <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono', $data->telefono) }}">
                            
                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    @if (request()->routeis('User.create'))
                        
                    
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="password">
                               @error('password')<i class="far fa-times-circle"></i>@enderror
                                Contraseña
                            </label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', $data->password) }}">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">                            
                            <label class="col-form-label" for="password_confirmation">
                               @error('password_confirmation')<i class="far fa-times-circle"></i>@enderror
                                Confirma la Contraseña
                            </label>
                            <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation', $data->password_confirmation) }}">
                            
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                    </div>
                    @endif

                    

                    <div class="col-md-12 mx-auto">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="crear" value="{{ request()->routeis('User.create') ? 'Crear Usuario' : 'Actualiza El USuario' }}">
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
