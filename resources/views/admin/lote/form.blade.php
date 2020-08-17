@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} {{--Modelo--}}</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.lote.store') : route('admin.lote.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    @if (is_null($data->id))
                        <div class="custom-control col-md-6">
                            <label for="empresa_id">Empresa</label>
                            <select name="empresa_id" id="empresa_id" class="form-control">
                                @forelse ($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                                @empty
                                    <option value="0">Todos los Usuarios Estan Asignados Porfavor Edita para cambiar su Persona asignada</option>
                                @endforelse
                            </select>
                            @error('empresa_id')
                            Error
                            @enderror
                        </div>
                    @endif
                    <div class="custom-control col-md-{{is_null($data->id)?'6':'12'}}">
                        @include(
                           'admin.assets.FormsElements.text', [
                           'nombre'    => 'nombre',
                           'tag'       => 'Nombre Del Lote',
                           'tipo'      => 'text',
                           'place'     => 'Nombre Del Lote',
                           'require'   => true,
                           'valor'     => !is_null($data->id) ? $data->nombre:old('nombre'),
                           'edit'      => true
                           ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-6">
                        <label for="descripcion">Informacion del Lote</label>
                        <textarea name="descripcion" id="info" cols="10" rows="2" class="form-control">{{!is_null($data->id) ? $data->descripcion:old('descripcion')}}</textarea>
                    </div>
                    <div class="custom-control col-md-6">
                        @include(
                           'admin.assets.FormsElements.text', [
                           'nombre'    => 'subasta_at',
                           'tag'       => 'Fecha de Subasta',
                           'tipo'      => 'datetime-local',
                           'place'     => '',
                           'require'   => true,
                           'valor'     => !is_null($data->id) ? $data->subasta_at:old('subasta_at'),
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
