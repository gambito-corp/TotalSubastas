@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <h2 class=" font-weight-bold text-dark titulo-recarga text-center mt-5">
            Completa tu Perfil de Usuario
        </h2>
        <div class="progress">
            <div class="progress-bar bg-success rogress-bar-striped progress-bar-animated" style="width:99%">99%</div>
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
                                datos para devolucion  (Opcionales)
                                <span>los datos aqui presentes no son obligatorios</span>
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
                                        <x-input

                                            nombre="numero_cuenta"
                                            label="Numero de Cuenta"
                                            type="text"
                                            :valor="$data->numero_cuenta"
                                            ayuda="Introduce Tu Numero De Cuenta Este Dato Es Solo para Ejecutar La Devolucion, No es Un Campo Obligatorio"></x-input>

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
{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-md-4">--}}
{{--                                    <x-input--}}
{{--                                        nombre="digito_documento"--}}
{{--                                        label="Digito Verificador del DNI"--}}
{{--                                        type="text"--}}
{{--                                        :valor="$data->digito_documento"--}}
{{--                                        ayuda="Es el numero ubicado en la Parte Superior derecha de su DNI"></x-input>--}}

{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-4">--}}
{{--                                        <label for="dni_front" class="font-weight-semibold text-dark">Documento Delante</label>--}}
{{--                                        <input type="file" name="dni_front" class="form-control  @error('dni_front') is-invalid @enderror recortar-texto" placeholder="">--}}

{{--                                        @error('dni_front')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-4">--}}
{{--                                        <label for="dni_back" class="font-weight-semibold text-dark">Documento Atras</label>--}}
{{--                                        <input type="file" name="dni_back" class="form-control  @error('dni_back') is-invalid @enderror recortar-texto" placeholder="">--}}

{{--                                        @error('dni_back')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    @isset($data->dni_front)--}}
{{--                                        <div class="form-group col-md-2" style="display: none;">--}}
{{--                                            <label for="dni_back" class="font-weight-semibold text-dark">Documento Delante</label>--}}

{{--                                        </div>--}}
{{--                                    @endisset--}}
{{--                                    @isset($data->dni_back)--}}
{{--                                        <div class="form-group col-md-2" style="display: none;">--}}
{{--                                            <label for="dni_back" class="font-weight-semibold text-dark">Documento Atras</label>--}}

{{--                                        </div>--}}
{{--                                    @endisset--}}
{{--                                </div>--}}
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
