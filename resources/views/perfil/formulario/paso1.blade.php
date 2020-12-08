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
        <h2 class=" font-weight-bold text-dark titulo-recarga text-center">
            Completa tu Perfil de Usuario
        </h2>

        <div class="progress">
            <div class="progress-bar bg-success rogress-bar-striped progress-bar-animated" style="width:1%">0%</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-3 order-md-1 mb-4   ">
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

                    <div class="col-md-9 col-sm-12 order-md-2 col-xs-12 t-rform_top mb-4 ">
                        <div class="main-container" style="padding: 25px">
                            <h2 class=" font-weight-bold text-dark titulo-recarga">
                                Informacion del Usuario
                            </h2>
                            <form action="{{route('perfil.paso2')}}" method="get" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                @if(auth()->user()->tipo == 'natural')
                                    <div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-12">
                                                <x-input
                                                    required
                                                    nombre="nombres"
                                                    label="Nombres"
                                                    type="text"
                                                    :valor="$data->nombres"
                                                    ayuda="Introduce o Corrige Tus Nombres"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="apellidos"
                                                    label="Apellidos"
                                                    type="text"
                                                    :valor="$data->apellidos"
                                                    ayuda="Introduce o Corrige Tus Apellidos"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="telefono"
                                                    label="Telefono"
                                                    type="text"
                                                    :valor="$data->telefono"
                                                    ayuda="Introduce o Corrige Tu Telefono"></x-input>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="email"
                                                    label="Email"
                                                    type="text"
                                                    :valor="$data->email"
                                                    ayuda="Introduce o Corrige Tu Email"></x-input>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <x-input
                                                    required
                                                    nombre="d_day"
                                                    label="Fecha de Nacimiento"
                                                    type="date"
                                                    :valor="$data->b_day->format('Y-m-d')"
                                                    ayuda="Introduce o Corrige Tu Fecha de Nacimiento"></x-input>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="tipo_documento" class="font-weight-semibold text-dark">Tipo</label>
                                                <select class="form-control  @error('tipo_documento') is-invalid @enderror" name="tipo_documento" id="tipo_documento">
                                                    <option value="DNI" {{(old('tipo_documento') == "DNI")? 'selected' : (($data->tipo_documento == "DNI") ? 'selected':'')}}>DNI</option>
                                                    <option value="CE" {{(old('tipo_documento') == "CE")? 'selected' : (($data->tipo_documento == "CE") ? 'selected':'')}}>CE</option>
                                                    <option value="Pasaporte" {{(old('tipo_documento') == "Pasaporte")? 'selected' : (($data->tipo_documento == "Pasaporte") ? 'selected':'')}}>Pasaporte</option>
                                                </select>
                                                <p class="valid-feedback text-center" role="alert" id="hide-banco_id">
                                                    <strong >Selecciona El Tipo de Documento Que Posees</strong>
                                                </p>

                                                @error('tipo_documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3">
                                                <x-input
                                                    required
                                                    nombre="numero_documento"
                                                    label="Numero de DNI"
                                                    type="text"
                                                    :valor="$data->numero_documento"
                                                    ayuda="Introduce o Corrige Tu Numero De Documento (DNI, C.E. o PASAPORTE)"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-12">
                                                <x-input
                                                    required
                                                    nombre="nombre"
                                                    label="Nombre Comercial"
                                                    type="text"
                                                    :valor="$data->nombre"
                                                    ayuda="Introduce o Corrige Tu nombre comercial"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="razon_social"
                                                    label="Razon Social"
                                                    type="text"
                                                    :valor="$data->razon_social"
                                                    ayuda="Introduce o Corrige Tu Razon Social"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="ruc"
                                                    label="R.U.C."
                                                    type="text"
                                                    :valor="$data->ruc"
                                                    ayuda="Introduce o Corrige Tu Numero de Ruc"></x-input>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="banco_id" class="font-weight-semibold text-dark">Banco del Usuario</label>
                                                <select name="banco_id" id="banco_id" class="form-control @error('banco_id') is-invalid @enderror">
                                                    @forelse($bancos as $banco)
                                                        <option value="{{$banco->id}}" {{old("banco_id") == $banco->id ? 'selected' : ($data->banco_id = $banco->id
                                                ? 'selected': '')}} >{{$banco->siglas}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                <p class="valid-feedback text-center" role="alert" id="hide-banco_id">
                                                    <strong >Selecciona Tu Banco</strong>
                                                </p>

                                                @error('banco_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-8">
                                                <x-input
                                                    nombre="numero_cuenta"
                                                    label="Numero de Cuenta"
                                                    type="text"
                                                    :valor="$data->numero_cuenta"
                                                    ayuda="Introduce o Corrige Tu Numero de Cuenta Bancaria, Es Para La Devolucion de Garantia y no es Obligatorio"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="telefono"
                                                    label="Telefono"
                                                    type="text"
                                                    :valor="$data->telefono"
                                                    ayuda="Introduce o Corrige Tu Numero de Telefono"></x-input>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <x-input
                                                    required
                                                    nombre="email"
                                                    label="Email"
                                                    type="text"
                                                    :valor="$data->email"
                                                    ayuda="Introduce o Corrige Tu Email"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group col-md-4 offset-md-4 mt-4">
                                    <input type="submit" class="btn btn-block btn-primary rounded-pill" value="Siguiente">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

