@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Producto</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.producto.store') : route('admin.producto.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    @if (is_null($data->id))
                        @if (auth()->user()->isAdmin())
                            <div class="custom-control col-md-6">
                                <label for="empresa_id">Empresa</label>
                                <select name="empresa_id" id="empresa_id" class="form-control">
                                    @forelse ($empresas as $dat)
                                        <option value="{{$dat->id}}">{{$dat->nombre}}</option>
                                    @empty
                                        <option value="0">Todos los Usuarios Estan Asignados Porfavor Edita para cambiar su Persona asignada</option>
                                    @endforelse
                                </select>
                            </div>
                        @elseif(auth()->user()->OnlyEmpresa())
                            <input type="hidden" name="empresa_id" value="{{$empresa}}">
                        @endif
                    @endif
                    <div class="custom-control col-md-{{is_null($data->id)?'3':'6'}}">
                        <label for="lote_id">Lote</label>
                        <select name="lote_id" id="lote_id" class="form-control">
                            @forelse ($lotes as $dat)
                                <option value="{{$dat->id}}">{{$dat->nombre}}</option>
                            @empty
                                <option value="0">No Existe Lotes Asignados a esta empresa</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="custom-control col-md-{{is_null($data->id)?'3':'6'}}">
                        <label for="ciudad">Ciudad</label>
                        <select name="ciudad" id="ciudad" class="form-control">
                            @forelse ($ciudad as $dat)
                                <option value="{{$dat->id}}">{{$dat->nombre}}</option>
                            @empty
                                <option value="0">Todos las Direcciones Estan Asignadas Porfavor Edita para cambiar su Direccion asignada</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-4">
                        <label for="tipo_vehiculo">Tipo de Veiculo</label>
                        <select name="tipo_vehiculo" id="tipo_vehiculo" class="form-control">
                            <option value="Vehiculo Ligero">Vehiculo Ligero</option>
                            <option value="Vehiculo Pesado">Vehiculo Pesado</option>
                        </select>
                    </div>
                    <div class="custom-control col-md-4">
                        <label for="tipo_subasta">Tipo de Subasta</label>
                        <select name="tipo_subasta" id="tipo_subasta" class="form-control">
                            <option value="Subasta">Subasta</option>
                            <option value="Compra">Compra</option>
                        </select>
                    </div>

                    <div class="custom-control col-md-4">
                        <label for="tipo_reserva">Tipo de Reserva</label>
                        <select name="tipo_reserva" id="tipo_reserva" class="form-control">
                            <option value="Sin Reserva">Sin Reserva</option>
                            <option value="Con Reserva">Con Reserva</option>
                            <option value="Compra Directa">Compra Directa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-3">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'nombre',
                            'tag'       => 'Nombre',
                            'tipo'      => 'text',
                            'place'     => 'Nombre',
                            'valor'     => !is_null($data->id) ? $data->nombre:old('nombre'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'precio',
                            'tag'       => 'Precio',
                            'tipo'      => 'text',
                            'place'     => '1000',
                            'valor'     => !is_null($data->id) ? $data->precio:old('precio'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'precio_reserva',
                            'tag'       => 'Reserva',
                            'tipo'      => 'text',
                            'place'     => '1000',
                            'valor'     => !is_null($data->id) ? $data->precio_reserva:old('precio_reserva'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'garantia',
                            'tag'       => 'Garantia',
                            'tipo'      => 'text',
                            'place'     => '1000',
                            'valor'     => !is_null($data->id) ? $data->garantia:old('garantia'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'puja',
                            'tag'       => 'Puja',
                            'tipo'      => 'text',
                            'place'     => '1000',
                            'valor'     => !is_null($data->id) ? $data->puja:old('puja'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-1">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'comision',
                            'tag'       => 'Comision',
                            'tipo'      => 'text',
                            'place'     => '5',
                            'valor'     => !is_null($data->id) ? $data->comision:old('comision'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control {{!is_null($data->id)?'col-md-6':'col-md-12'}}">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'imagen',
                            'tag'       => 'Imagen Principal del vehiculo',
                            'tipo'      => 'file',
                            'place'     => ''
                            ])
                    </div>
                    @if(!is_null($data->id))
                        <div class="custom-control col-md-6">
                            @if (isset($data->imagen))
                                @include('assets.imagen', ['carpeta' => 'producto', 'id' => $data->id, 'ancho' => '300', 'admin' => true])
                            @endif
                        </div>
                    @endif
                    <div class="custom-control col-md-6">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'started_at',
                            'tag'       => 'Fecha de Inicio',
                            'tipo'      => 'datetime-local',
                            'place'     => '5',
                            'valor'     => !is_null($data->id) ? $data->started_at:old('started_at'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-6">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'finalized_at',
                            'tag'       => 'Fecha de Fin',
                            'tipo'      => 'datetime-local',
                            'place'     => '5',
                            'valor'     => !is_null($data->id) ? $data->finalized_at:old('finalized_at'),
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
