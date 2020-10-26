@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container faq">
                <div class="container">
                    <h1 class="font-weight-bold text-light text-uppercase">
                        Editar Perfil
                    </h1>
                    <p class="text-light text-capitalize">
                        De {{(auth()->user()->tipo == 'natural')?$data->nombres.' '.$data->apellidos: $data->nombre}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-3 order-md-1 mb-4   ">
                        <div class="text-center">
                            <div class="bg-light-card shadow-sm radius">
                                @if (isset(auth()->user()->avatar))
                                    @include('assets.imagen', ['carpeta' => 'user', 'id' => auth()->id(), 'ancho' => '90', 'class'=> 'img-circle elevation-2'])
                                @endif
                                <div class="card-body pl-0 pr-0">
                                    <h5 class="card-title font-weight-bold text-dark">{{(auth()->user()->tipo == 'natural')?$data->nombres.' '.$data->apellidos: $data->nombre}}</h5>
                                    <p class="card-text">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12   order-md-2 col-xs-12 t-rform_top main-container p-5">
                        <h2 class=" font-weight-bold text-dark pb-5 text-center">
                            Pais del Usuario
                        </h2>
                        <form action="{{route('perfil.paso7')}}" method="get" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="tipo_via" class="font-weight-bold text-dark">Tipo de Via</label>
                                    <select class="form-control" name="tipo_via" id="">
                                        <option value="Avenida">Avenida</option>
                                        <option value="Jiron">Jiron</option>
                                        <option value="Calle">Calle</option>
                                        <option value="Pasaje">Pasaje</option>
                                        <option value="Alameda">Alameda</option>
                                        <option value="Malecon">Malecon</option>
                                        <option value="Ovalo">Ovalo</option>
                                        <option value="Parque">Parque</option>
                                        <option value="Plaza">Plaza</option>
                                        <option value="Carretera">Carretera</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="direccion1" class="font-weight-bold text-dark">Direccion 1</label>
                                    <input type="text" name="direccion1" class="form-control  @error('direccion1') is-invalid @enderror" placeholder="">

                                    @error('direccion1')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="direccion2" class="font-weight-bold text-dark">Segunda Linea</label>
                                    <input type="text" name="direccion2" class="form-control  @error('direccion2') is-invalid @enderror" placeholder="">

                                    @error('direccion2')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numero" class="font-weight-bold text-dark">Numero</label>
                                    <input type="text" name="numero" class="form-control  @error('numero') is-invalid @enderror" placeholder="">

                                    @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>



                            </div>

                            <div class="row">
                                <div class="form-group col-md-2">

                                    <label for="int_ext" class="font-weight-bold text-dark">Interior/Exterior</label>
                                    <select class="form-control  @error('int_ext') is-invalid @enderror" name="int_ext" id="departamento">
                                        <option value="Interior">Interior</option>
                                        <option value="Exterior">Exterior</option>
                                    </select>

                                    @error('int_ext')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="referencia" class="font-weight-bold text-dark">Referencia</label>
                                    <input type="text" name="referencia" class="form-control  @error('referencia') is-invalid @enderror" placeholder="">

                                    @error('referencia')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="titulo_direccion" class="font-weight-bold text-dark">Titulo Para Guardar La Direccion</label>
                                    <input type="text" name="titulo_direccion" class="form-control  @error('titulo_direccion') is-invalid @enderror" placeholder="">

                                    @error('titulo_direccion')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <a href="javascript:history.back()" class="btn btn-block btn-danger"> Volver Atrás</a>
                                </div>
                                <div class="form-group col-md-4 offset-md-4">
                                    <input type="submit" class="btn btn-block btn-primary" value="siguiente">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
