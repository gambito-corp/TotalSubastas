@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Imagenes de Producto</h1>
@endsection
@section('content')
    <form action="{{route('admin.imagenesproducto.store')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                @if(is_null($data->id))
                    @livewire('admin.form.imagen.create',  ['empresas' => $empresas, 'lotes' => $lotes, 'productos' => $productos])
                @else
                    @livewire('admin.form.imagen.update',  ['data' => $data, 'empresas' => $empresas, 'lotes' => $lotes, 'productos' => $productos])
                @endif
                <div class="form-group row">
                    <div class="custom-control {{!is_null($data->id)?'col-md-6':'col-md-6 offset-3'}}">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'imagen[]',
                            'tag'       => 'Imagenes de Vehiculos',
                            'tipo'      => 'file',
                            'multi'     => 'multiple'
                            ])
                    </div>
                    @if(!is_null($data->id))
                        <div class="custom-control col-md-6">
                            @if (isset($data->imagen))
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @forelse($group as $data)
                                        <div class="carousel-item {{$loop->first?'active':''}}">
                                            @include('assets.imagen', [
                                                'carpeta'   => 'balance',
                                                'id'        => $data->id,
                                                'class'     => $loop->first?'active':'',
                                                'admin'     => true,
                                                ])
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-6">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'titulo',
                            'tag'       => 'Titulo de la Foto',
                            'tipo'      => 'text',
                            'valor'     => !is_null($data->id) ? $data->titulo:old('titulo'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-6">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'descripcion',
                            'tag'       => 'Descripcion de la foto',
                            'tipo'      => 'text',
                            'valor'     => !is_null($data->id) ? $data->descripcion:old('descripcion'),
                            'edit'      => true
                            ])
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{'Crear'}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    {{--scripts--}}
@endpush
