@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Documentos de Vehiculo</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.documentos.store') : route('admin.documentos.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                @if(is_null($data->id))
                    @livewire('admin.form.imagen.create',  ['empresas' => $empresas, 'lotes' => $lotes, 'productos' => $productos])
                @endif
                <div class="form-group">
                    <div class="row">
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'titulo1',
                                'tag'       => 'Que Documento es?',
                                'tipo'      => 'text',
                                'place'     => 'Titulo',
                                'valor'     => !is_null($data->id) ? $data->titulo1:old('titulo1'),
                                'edit'      => true
                                ])
                        </div>
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'titulo2',
                                'tag'       => 'Que Documento es?',
                                'tipo'      => 'text',
                                'place'     => 'Titulo',
                                'valor'     => !is_null($data->id) ? $data->titulo2:old('titulo2'),
                                'edit'      => true
                                ])
                        </div>
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'titulo3',
                                'tag'       => 'Que Documento es?',
                                'tipo'      => 'text',
                                'place'     => 'Titulo',
                                'valor'     => !is_null($data->id) ? $data->titulo3:old('titulo3'),
                                'edit'      => true
                                ])
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'documento1',
                                'tag'       => 'Adjunta el primer Documento',
                                'tipo'      => 'file',
                                'place'     => '',
                                'valor'     => !is_null($data->id) ? $data->documento1:old('documento1'),
                                'edit'      => true
                                ])
                        </div>
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'documento2',
                                'tag'       => 'Adjunta el segundo Documento',
                                'tipo'      => 'file',
                                'place'     => '',
                                'valor'     => !is_null($data->id) ? $data->documento2:old('documento2'),
                                'edit'      => true
                                ])
                        </div>
                        <div class="custom-control col-md-4">
                            @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'documento3',
                                'tag'       => 'Adjunta el tercer Documento',
                                'tipo'      => 'file',
                                'place'     => '',
                                'valor'     => !is_null($data->id) ? $data->documento3:old('documento3'),
                                'edit'      => true
                                ])
                        </div>
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
