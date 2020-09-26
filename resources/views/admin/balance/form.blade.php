@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Balance a un Usuario, {{is_null($data->id)? '': $data->Usuario->name}}</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.balance.store') : route('admin.balance.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <div class="custom-control col-md-12">
                        @if($data->id)
                            <label for="aprobado">Aprobar Balance?</label>
                            <select name="aprobado" id="aprobar" class="form-control">
                                <option value="" {{$data->aprobado == null?'selected':''}}>Selecciona una Opcion</option>
                                <option value="true" {{$data->aprobado == true?'selected':''}}>SI</option>
                                <option value="false" {{$data->aprobado == false?'selected':''}}>NO</option>
                            </select>
                        @else
                            <label for="aprobado">Aprobar Balance?</label>
                            <select name="aprobado" id="aprobar" class="form-control">
                                <option value="" {{old('aprobar') == null?'selected':''}}>Selecciona una Opcion</option>
                                <option value="true" {{old('aprobar') == true?'selected':''}}>SI</option>
                                <option value="false" {{old('aprobar') == false?'selected':''}}>NO</option>
                            </select>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    @if (is_null($data->id))
                        <div class="custom-control col-md-6">
                            <label for="user">Usuario</label>
                            <select name="user" id="user" class="form-control">
                                @forelse ($usuarios as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @empty
                                    <option value="0">Todos los Usuarios Estan Asignados Porfavor Edita para cambiar su balance</option>
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
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'monto',
                            'tag'       => 'Monto',
                            'tipo'      => 'text',
                            'place'     => 'Monto a Depositar',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->monto:old('monto'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'tipo',
                            'tag'       => 'Tipo De Deposito',
                            'tipo'      => 'text',
                            'place'     => 'Tipo de Deposito',
                            'valor'     => !is_null($data->id) ? $data->tipo:old('tipo'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'descripcion',
                            'tag'       => 'Descripcion',
                            'tipo'      => 'text',
                            'place'     => 'Breve Descripccion',
                            'valor'     => !is_null($data->id) ? $data->descripcion:old('descripcion'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'motivo',
                            'tag'       => 'Motivo del Deposito',
                            'tipo'      => 'text',
                            'place'     => 'Motivo del Deposito',
                            'valor'     => !is_null($data->id) ? $data->motivo:old('motivo'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'cuenta',
                            'tag'       => 'Numero de Cuenta',
                            'tipo'      => 'text',
                            'place'     => 'Numero de Cuenta del Cliente',
                            'require'   => true,
                            'valor'     => !is_null($data->id) ? $data->cuenta:old('cuenta'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'transaccion',
                            'tag'       => 'Transaccion',
                            'tipo'      => 'text',
                            'place'     => 'Transaccion',
                            'valor'     => !is_null($data->id) ? $data->transaccion_banco:old('transaccion'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'abono_at',
                            'tag'       => 'Fecha de Abono',
                            'tipo'      => 'datetime-local',
                            'place'     => '2020-08-04 16:41:52',
                            'valor'     => !is_null($data->id) ? $data->abono_at:old('abono_at'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control {{!is_null($data->id)?'col-md-6':'col-md-6 offset-3'}}">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'boucher',
                            'tag'       => 'Foto del Boucher',
                            'tipo'      => 'file',
                            'place'     => '2020-08-04 16:41:52',

                            ])
                    </div>
                    @if(!is_null($data->id))
                        <div class="custom-control col-md-6">
                            @if (isset($data->boucher))
                                @include('assets.imagen', ['carpeta' => 'balance', 'id' => $data->id, 'ancho' => '300', 'admin' => true])
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
