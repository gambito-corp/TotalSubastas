@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container faq">
                <div class="container">
                    <h1 class="font-weight-bold text-light text-uppercase">
                        Cambio de Imagen de Perfil
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-12 col-sm-12   order-md-2 col-xs-12 t-rform_top main-container p-5">
                        <h2 class=" font-weight-bold text-dark pb-5 text-center">
                            Cambia Tu Imagen de Perfil
                        </h2>
                        <form action="{{route('save.perfil')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="custom-control col-md-6">
                                    @include(
                                        'home.assets.text', [
                                        'nombre'    => 'avatar',
                                        'tag'       => 'Selecciona imagen de perfil',
                                        'tipo'      => 'file',
                                        'place'     => '',
                                        'require'   => true,
                                        'valor'     => old('avatar'),
                                        'edit'      => true

                                        ])
                                </div>
                                <div class="custom-control col-md-6">
                                    @if (isset(auth()->user()->avatar))
                                        @include('assets.imagen', [
                                                'carpeta' => 'user',
                                                'id' => auth()->id(),
                                                'ancho' => '300'
                                            ])
                                    @endif
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-group col-md-4 offset-md-4">
                                <input type="submit" class="btn btn-block btn-primary" value="siguiente">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
