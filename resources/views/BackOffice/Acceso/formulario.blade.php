@extends('BackOffice.page')
@section('title-pre', 'TotalSubastas')

@if (request()->routeis('Acceso.create'))
    @section('title', '- Crear Acceso')
@else  
    @section('title', '- Actualiza el Acceso '.$data->id)
@endif

@section('css')
@section('fuentes')

@if (request()->routeis('Acceso.create'))
    @section('content_header', 'Creemos un Acceso')
@else  
    @section('content_header', 'Actualiza el Acceso '.$data->id)
@endif

@if (request()->routeis('Acceso.create'))
    @section('BreadCrumbs', 'Acceso / Crear')
@else  
    @section('BreadCrumbs', 'Acceso / Editar / '.$data->id)
@endif
@section('contenido')
    <h2>
        rellena los campos del formulario
    </h2>
    <!-- general form elements disabled -->
    <div class="card card-info col-md-8 mx-auto">
        <div class="card-header">
            <h3 class="card-title">{{ request()->routeis('Acceso.create') ? 'Crea Tu Propio Acceso' : 'Actualiza el Acceso '.$data->id }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form 
            role="form" 
            method="POST" 
            action="{{ request()->routeis('Acceso.create') ? route('Acceso.store') : route('Acceso.update', ['acceso' => $data->id]) }}">
                @if (request()->routeis('Acceso.edit')) @method('PATCH') @endif
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
                                    {{ old('rol_id') == $rol->id ? 'selected': '' }}>{{ $rol->nombre }}</option>
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
                                                        
                            <label class="col-form-label" for="autorizacion_id">
                               @error('autorizacion_id')<i class="far fa-times-circle"></i>@enderror

                                Controlador
                            </label>
                            <select name="autorizacion_id" id="autorizacion_id" class="form-control @error('slug') is-invalid @enderror select2" data-placeholder="Selecciona un Controlador">                                                                                                        
                                @forelse ($autorizacion as $auto)
                                    <option 
                                    value="{{ $auto->id }}
                                    {{ old('autorizacion_id') == $auto->id ? 'selected': '' }}">
                                    {{ $auto->nombre }}
                                </option>
                                @empty
                                    
                                @endforelse
                            </select>
                            
                            @error('autorizacion_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">                                                        
                            <label class="col-form-label" for="permiso_id">
                               @error('permiso_id')<i class="far fa-times-circle"></i>@enderror

                                Permisos
                            </label>
                            <select name="permiso_id[]" id="permiso_id" class="form-control @error('permiso_id') is-invalid @enderror select2"  multiple="multiple" data-placeholder="Selecciona Los Permisos">                                                                                                        
                                @forelse ($permisos as $permiso)
                                    <option 
                                    value="{{ $permiso->id }}
                                    {{ collect(old('permiso_id'))->contains($permiso->id) ? 'selected': '' }}">{{ $permiso->nombre }}</option>
                                @empty
                                    
                                @endforelse
                            </select>
                            
                            @error('permiso_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>

                    <div class="col-md-12 mx-auto">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="crear" value="{{ request()->routeis('Acceso.create') ? 'Crear Acceso' : 'Actualiza El Acceso' }}">
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
<script>
    $(document).ready(function() {
            $('.select2').select2({
        })
    });
</script>
@endsection
