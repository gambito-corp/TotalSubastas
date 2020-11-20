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
                    <div class="col-md-3 order-md-1 mb-4">
                        <div class="text-center">
                            <div class="bg-light-card shadow-sm radius" style="padding-top: 25px;">
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
                    <div class="col-md-9 col-sm-12   order-md-2 col-xs-12 t-rform_top mb-4">
                        <div class="main-container" style="padding: 25px">                            
                        
                            <h2 class=" font-weight-bold text-dark titulo-recarga">
                                Pais del Usuario
                            </h2>
                            <form action="{{route('perfil.paso8')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="banco_id" class="font-weight-semibold text-dark">Banco del Usuario</label>
                                        <select name="banco_id" id="banco_id" class="form-control @error('banco_id') is-invalid @enderror">
                                            @forelse($bancos as $banco)
                                                <option value="{{$banco->id}}" {{old('banco_id') == $banco->id?'selected':($data->banco_id == $banco->id? 'selected': '')}}>{{$banco->siglas}}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                        @error('banco_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="numero_cuenta" class="font-weight-semibold text-dark">Numero de Cuenta</label>
                                        <input type="text" name="numero_cuenta" class="form-control  @error('numero_cuenta') is-invalid @enderror" placeholder="" value="{{old('numero_cuenta')?old('numero_cuenta'):$data->cuenta_banco}}">
                                        @error('numero_cuenta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="genero" class="font-weight-semibold text-dark">Genero</label>
                                        <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
                                            <option value="Hombre" {{old('genero') == 'Hombre'?'selected':($data->genero == 'Hombre'? 'selected': '')}}>Hombre</option>
                                            <option value="Mujer" {{old('genero') == 'Mujer'?'selected':($data->genero == 'Mujer'? 'selected': '')}}>Mujer</option>
                                        </select>

                                        @error('genero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="estado_civil" class="font-weight-semibold text-dark">Estado Civil</label>
                                        <select name="estado_civil" id="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror">
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>
                                        </select>

                                        @error('estado_civil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'2':'4'}}">
                                        <label for="digito_documento" class="font-weight-semibold text-dark">Digito de DNI</label>
                                        <input type="text" name="digito_documento"  value="{{old('digito_documento')?old('digito_documento'):$data->digito_documento}}" class="form-control  @error('digito_documento') is-invalid @enderror" placeholder="">

                                        @error('digito_documento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'5':'4'}}">
                                        <label for="dni_front" class="font-weight-semibold text-dark">Documento Delante</label>
                                        <input type="file" name="dni_front" class="form-control  @error('dni_front') is-invalid @enderror recortar-texto" placeholder="">

                                        @error('dni_front')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'5':'4'}}">
                                        <label for="dni_back" class="font-weight-semibold text-dark">Documento Atras</label>
                                        <input type="file" name="dni_back" class="form-control  @error('dni_back') is-invalid @enderror recortar-texto" placeholder="">

                                        @error('dni_back')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    @isset($data->dni_front)
                                        <div class="form-group col-md-2" style="display: none;">
                                            <label for="dni_back" class="font-weight-semibold text-dark">Documento Delante</label>

                                        </div>
                                    @endisset
                                    @isset($data->dni_back)
                                        <div class="form-group col-md-2" style="display: none;">
                                            <label for="dni_back" class="font-weight-semibold text-dark">Documento Atras</label>

                                        </div>
                                    @endisset
                                </div>
                                <div class="row mt-4">
                                    <div class="form-group col-md-4">
                                        <a href="javascript:history.back()" class="btn btn-block btn-danger rounded-pill"> Volver Atrás</a>
                                    </div>
                                    <div class="form-group col-md-4 offset-md-4">
                                        <input type="submit" class="btn btn-block btn-primary rounded-pill" value="siguiente">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
