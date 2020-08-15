@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} {{--Modelo--}}</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.juridica.store') : route('admin.juridica.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    @if (is_null($data->id))
                        <div class="custom-control col-md-6">
                            <label for="persona_id">Persona</label>
                            <select name="persona_id" id="persona_id" class="form-control">
                                @forelse ($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->nombres}}</option>
                                @empty
                                    <option value="0">Todos los Usuarios Estan Asignados Porfavor Edita para cambiar su Persona asignada</option>
                                @endforelse
                            </select>
                        </div>
                    @endif
                    <div class="custom-control col-md-{{is_null($data->id)?'6':'12'}}">
                        <label for="banco_id">Banco</label>
                        <select name="banco_id" id="banco_id" class="form-control">
                            @forelse ($bancos as $banco)
                                <option value="{{$banco->id}}">{{$banco->nombre}}</option>
                            @empty
                                <option value="0">No hay Bancos en el sistema</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-3">
                        <label for="direccion_id">Direccion</label>
                        <select name="direccion_id" id="direccion_id" class="form-control">
                            @forelse ($direccion as $dir)
                                <option value="{{$dir->id}}">{{$dir->titulo_direccion}}</option>
                            @empty
                                <option value="0">Todos las Direcciones Estan Asignadas Porfavor Edita para cambiar su Direccion asignada</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="custom-control col-md-3">
                        <label for="direccion2_id">Direccion Adicional</label>
                        <select name="direccion2_id" id="direccion2_id" class="form-control">
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
                            'nombre'    => 'nombre',
                            'tag'       => 'Nombre Comercial',
                            'tipo'      => 'text',
                            'place'     => 'Nombre Comercial',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->nombre:old('nombre'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'razon_social',
                            'tag'       => 'Razon Social',
                            'tipo'      => 'text',
                            'place'     => 'Razon Social',
                            'valor'     => !is_null($data->id) ? $data->razon_social:old('razon_social'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group row">

                    <div class="custom-control col-md-4">
                        @include(
                           'admin.assets.FormsElements.text', [
                           'nombre'    => 'ruc',
                           'tag'       => 'R.U.C.',
                           'tipo'      => 'text',
                           'place'     => 'Ruc',
                           'valor'     => !is_null($data->id) ? $data->ruc:old('ruc'),
                           'edit'      => true
                           ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'numero_cuenta',
                            'tag'       => 'Numero de Cuenta',
                            'tipo'      => 'text',
                            'place'     => 'Numero de Cuenta',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->numero_cuenta:old('numero_cuenta'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'telefono',
                            'tag'       => 'Telefono de la Empresa',
                            'tipo'      => 'text',
                            'place'     => 'Telefono',
                            'valor'     => !is_null($data->id) ? $data->telefono:old('telefono'),
                            'edit'      => true
                            ])
                    </div>
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
