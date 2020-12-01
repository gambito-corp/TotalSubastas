@extends('layouts.app')
@section('content')
    @push('styles')
        <style>
            #hide-nombre-comercial{
                display:none;
            }

            #nombre-comercial:focus-visible ~ #hide-nombre-comercial{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }
            #hide-razon_social{
                display:none;
            }

            #razon-social:focus-visible ~ #hide-razon_social{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

            #hide-ruc{
                display:none;
            }

            #ruc:focus-visible ~ #hide-ruc{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

            #hide-banco_id{
                display:none;
            }

            #banco_id:focus-visible ~ #hide-banco_id{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

            #hide-numero-cuenta{
                display:none;
            }

            #numero-cuenta:focus-visible ~ #hide-numero-cuenta{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

            #hide-telefono{
                display:none;
            }

            #telefono:focus-visible ~ #hide-telefono{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

            #hide-email{
                display:none;
            }

            #email:focus-visible ~ #hide-email{
                border: 1px solid green;
                border-radius: 5px;
                background-color: rgba(0,255,0,0.4);
                display:block;
                color: green;
            }

        </style>
    @endpush
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
                            <form action="{{route('perfil.paso2')}}" method="get" enctype="multipart/form-data">
                                @csrf
                                @if(auth()->user()->tipo == 'natural')
                                    <div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label for="nombres" class="font-weight-semibold text-dark">Nombres</label>
                                                <input type="text" name="nombres"
                                                       class="form-control @error('nombres') is-invalid @enderror"
                                                       value="{{old('nombres')?old('nombres'):$data->nombres}}">
{{--                                                        id="nombre">--}}
{{--                                                <span class="valid-feedback" role="alert" >--}}
{{--                                                    <strong id="hide-nombre">Introduce o Corrije Tu nombre</strong>--}}
{{--                                                </span>--}}
                                                @error('nombres')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="apellidos" class="font-weight-semibold text-dark">Apellidos</label>
                                                <input type="text" name="apellidos"
                                                       class="form-control @error('apellidos') is-invalid @enderror"
                                                       value="{{old('apellidos')?old('apellidos'):$data->apellidos}}">
                                                @error('apellidos')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="telefono" class="font-weight-semibold text-dark">Telefono</label>
                                                <input type="text" name="telefono"
                                                       class="form-control @error('telefono') is-invalid @enderror"
                                                       value="{{old('telefono')?old('telefono'):$data->telefono}}">
                                                @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="email" class="font-weight-semibold text-dark">Email</label>
                                                <input type="text" name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       value="{{old('email')?old('email'):Auth::user()->email}}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="d_day" class="font-weight-semibold text-dark">Fecha de Nacimiento</label>
                                                <input type="date" name="d_day"
                                                       class="form-control @error('d_day') is-invalid @enderror"
                                                       value="{{old('d_day')?old('d_day'):$data->b_day->format('Y-m-d')}}">
                                                @error('d_day')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="tipo_documento" class="font-weight-semibold text-dark">Tipo</label>
                                                <select class="form-control  @error('tipo_documento') is-invalid @enderror" name="tipo_documento" id="tipo_documento">
                                                    <option value="DNI" {{(old('tipo_documento') == "DNI")? 'selected' : (($data->tipo_documento == "DNI") ? 'selected':'')}}>DNI</option>
                                                    <option value="CE" {{(old('tipo_documento') == "CE")? 'selected' : (($data->tipo_documento == "CE") ? 'selected':'')}}>CE</option>
                                                    <option value="Pasaporte" {{(old('tipo_documento') == "Pasaporte")? 'selected' : (($data->tipo_documento == "Pasaporte") ? 'selected':'')}}>Pasaporte</option>
                                                </select>

                                                @error('tipo_documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="numero_documento" class="font-weight-semibold text-dark">Numero</label>
                                                <input type="text" name="numero_documento"
                                                       class="form-control @error('numero_documento') is-invalid @enderror"
                                                       value="{{old('numero_documento')?old('numero_documento'):$data->numero_documento}}">
                                                @error('numero_documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label for="nombre" class="font-weight-semibold text-dark">Nombre Comercial</label>
                                                <input type="text" name="nombre"
                                                       class="form-control @error('nombre') is-invalid @enderror"
                                                       value="{{old('nombre')?old('nombre'):$data->nombre}}"
                                                        id="nombre-comercial">
                                                <span class="valid-feedback text-center" role="alert" id="hide-nombre-comercial">
                                                    <strong >Introduce o Corrige Tu nombre comercial</strong>
                                                </span>
                                                @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="razon_social" class="font-weight-semibold text-dark">Razon Social</label>
                                                <input type="text" name="razon_social"
                                                       class="form-control @error('razon_social') is-invalid @enderror"
                                                       value="{{old('razon_social')?old('razon_social'):$data->razon_social}}"
                                                       id="razon_social">
                                                <span class="valid-feedback text-center" role="alert" id="hide-razon_social">
                                                    <strong >Introduce o Corrige Tu Razon Social</strong>
                                                </span>
                                                @error('razon_social')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="ruc" class="font-weight-semibold text-dark">R.U.C.</label>
                                                <input type="text" name="ruc"
                                                       class="form-control @error('ruc') is-invalid @enderror"
                                                       value="{{old('ruc')?old('ruc'):$data->ruc}}" id="ruc">
                                                <span class="valid-feedback text-center" role="alert" id="hide-ruc">
                                                    <strong >Introduce o Corrige Tu Numero de ruc</strong>
                                                </span>
                                                @error('ruc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
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
                                                <span class="valid-feedback text-center" role="alert" id="hide-banco_id">
                                                    <strong >Introduce o Corrige Tu banco</strong>
                                                </span>

                                                @error('banco_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="numero_cuenta" class="font-weight-semibold text-dark">Numero de Cuenta</label>
                                                <input type="text" name="numero_cuenta"
                                                       class="form-control  @error('numero_cuenta') is-invalid @enderror"
                                                       placeholder=""
                                                       value="{{old('numero_cuenta')?old('numero_cuenta'):$data->numero_cuenta}}"
                                                       id="numero-cuenta">
                                                <span class="valid-feedback text-center" role="alert" id="hide-numero-cuenta">
                                                    <strong >Introduce o Corrige Tu numero de cuenta</strong>
                                                </span>

                                                @error('numero_cuenta')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="telefono" class="font-weight-semibold text-dark">Telefono</label>
                                                <input type="text" name="telefono"
                                                       class="form-control  @error('telefono') is-invalid @enderror"
                                                       placeholder=""
                                                       value="{{old('telefono')?old('telefono'):$data->telefono}}"
                                                       id="telefono">
                                                <span class="valid-feedback text-center" role="alert" id="hide-telefono">
                                                    <strong >Introduce o Corrige Tu Telefono</strong>
                                                </span>

                                                @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="email" class="font-weight-semibold text-dark">Email</label>
                                                <input type="text" name="email"
                                                       class="form-control  @error('email') is-invalid @enderror"
                                                       placeholder=""
                                                       value="{{old('email')?old('email'):$data->email}}"
                                                       id="email">
                                                <span class="valid-feedback text-center" role="alert" id="hide-email">
                                                    <strong >Introduce o Corrige Tu Email</strong>
                                                </span>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
