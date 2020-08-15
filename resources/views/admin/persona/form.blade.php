@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Persona</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.persona.store') : route('admin.persona.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    @if (is_null($data->id))
                        <div class="custom-control col-md-6">
                            <label for="user">Usuario</label>
                            <select name="user" id="user" class="form-control">
                                @forelse ($usuarios as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @empty
                                    <option value="0">Todos los Usuarios Estan Asignados Porfavor Edita para cambiar su Persona asignada</option>
                                @endforelse
                            </select>
                        </div>
                    @endif
                    <div class="custom-control col-md-{{is_null($data->id)?'6':'12'}}">
                        <label for="banco">Banco</label>
                        <select name="banco" id="banco" class="form-control">
                            @forelse ($bancos as $banco)
                                <option value="{{$banco->id}}">{{$banco->nombre}}</option>
                            @empty
                                <option value="0">No hay Bancos en el sistema</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-6">
                        <label for="direccion">Direccion</label>
                        <select name="direccion" id="direccion" class="form-control">
                            @forelse ($direccion as $dir)
                                <option value="{{$dir->id}}">{{$dir->titulo_direccion}}</option>
                            @empty
                                <option value="0">Todos las Direcciones Estan Asignadas Porfavor Edita para cambiar su Direccion asignada</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'nombres',
                            'tag'       => 'Nombres',
                            'tipo'      => 'text',
                            'place'     => 'Nombres de la Persona',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->nombres:old('nombres'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'apellidos',
                            'tag'       => 'Apellidos',
                            'tipo'      => 'text',
                            'place'     => 'Apellidos de la persona',
                            'valor'     => !is_null($data->id) ? $data->apellidos:old('apellidos'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        <label for="tipo_documento">Tipo De Documento</label>
                        <select name="tipo_documento" id="tipo_documento" class="form-control">
                            <option value="DNI">DNI</option>
                        </select>
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'numero_documento',
                            'tag'       => 'Numero del Documento',
                            'tipo'      => 'text',
                            'place'     => 'Motivo del Deposito',
                            'valor'     => !is_null($data->id) ? $data->numero_documento:old('numero_documento'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-1">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'digito_documento',
                            'tag'       => 'Digito',
                            'tipo'      => 'text',
                            'place'     => '0-9',
                            'valor'     => !is_null($data->id) ? $data->digito_documento:old('digito_documento'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                        </select>
                    </div>
                    <div class="custom-control col-md-1">
                        <label for="juridica">Juridica</label>
                        <select name="juridica" id="juridica" class="form-control">
                            <option value="0">No</option>
                            <option value="1">si</option>
                        </select>
                    </div>
                    <div class="custom-control col-md-2">
                        <label for="estado_civil">Estado Civil</label>
                        <select name="estado_civil" id="estado_civil" class="form-control">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viudo">Viudo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'cuenta_banco',
                            'tag'       => 'Numero de Cuenta',
                            'tipo'      => 'text',
                            'place'     => 'Numero de Cuenta',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->cuenta_banco:old('cuenta_banco'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'b_day',
                            'tag'       => 'Fecha de Nacimiento',
                            'tipo'      => 'datetime-local',
                            'place'     => '2020-08-04 16:41:52',
                            'valor'     => !is_null($data->id) ? $data->b_day:old('b_day'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'telefono',
                            'tag'       => 'Numero de Telefono',
                            'tipo'      => 'text',
                            'place'     => 'Numero de Telefono',
                            'valor'     => !is_null($data->id) ? $data->telefono:old('telefono'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control {{!is_null($data->id)?'col-md-6':'col-md-6 offset-3'}}">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'dni[]',
                            'tag'       => 'Foto del DNI',
                            'tipo'      => 'file',
                            'place'     => '',
                            'multi'     => 'multiple'
                            ])
                    </div>
                    @if(!is_null($data->id))
                        <div class="custom-control col-md-6">
                            @if (isset($data->boucher))
                                @include('assets.imagen', ['carpeta' => 'persona', 'id' => $data->id, 'ancho' => '300', 'admin' => true])
                            @endif
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($data->id) ? 'Editar':'Crear' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    {{--scripts--}}
@endpush
