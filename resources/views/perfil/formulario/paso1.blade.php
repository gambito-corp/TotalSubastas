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
                            Informacion del Usuario
                        </h2>
                        <form action="{{route('perfil.paso2')}}" method="get" enctype="multipart/form-data">
                            @csrf
                            @if(auth()->user()->tipo == 'natural')
                                <div>
                                    <div class="row">
                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="nombres" class="font-weight-bold text-dark">Nombres</label>
                                            <input type="text" name="nombres"
                                                   class="form-control @error('nombres') is-invalid @enderror"
                                                   value="{{old('nombres')?old('nombres'):$data->nombres}}">
                                            @error('nombres')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="apellidos" class="font-weight-bold text-dark">Apellidos</label>
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
                                            <label for="telefono" class="font-weight-bold text-dark">Telefono</label>
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
                                            <label for="email" class="font-weight-bold text-dark">Email</label>
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
                                            <label for="d_day" class="font-weight-bold text-dark">Fecha de Nacimiento</label>
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
                                            <label for="tipo_documento" class="font-weight-bold text-dark">Tipo</label>
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
                                            <label for="numero_documento" class="font-weight-bold text-dark">Numero</label>
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
                                            <label for="nombre" class="font-weight-bold text-dark">Nombre Comercial</label>
                                            <input type="text" name="nombre"
                                                   class="form-control @error('nombre') is-invalid @enderror"
                                                   value="{{old('nombre')?old('nombre'):$data->nombre}}">
                                            @error('nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="razon_social" class="font-weight-bold text-dark">Razon Social</label>
                                            <input type="text" name="razon_social"
                                                   class="form-control @error('razon_social') is-invalid @enderror"
                                                   value="{{old('razon_social')?old('razon_social'):$data->razon_social}}">
                                            @error('razon_social')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ruc" class="font-weight-bold text-dark">R.U.C.</label>
                                            <input type="text" name="ruc"
                                                   class="form-control @error('ruc') is-invalid @enderror"
                                                   value="{{old('ruc')?old('ruc'):$data->ruc}}">
                                            @error('ruc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="banco_id" class="font-weight-bold text-dark">Banco del Usuario</label>
                                            <select name="banco_id" id="banco_id" class="form-control @error('banco_id') is-invalid @enderror">
                                                @forelse($bancos as $banco)

                                                    <option value="{{$banco->id}}" {{old("banco_id") == $banco->id ? 'selected' : ($data->banco_id = $banco->id
                                            ? 'selected': '')}} >{{$banco->siglas}}</option>
                                                @empty
                                                @endforelse
                                            </select>

                                            @error('banco_id')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="numero_cuenta" class="font-weight-bold text-dark">Numero de Cuenta</label>
                                            <input type="text" name="numero_cuenta"
                                                   class="form-control  @error('numero_cuenta') is-invalid @enderror"
                                                   placeholder=""
                                                   value="{{old('numero_cuenta')?old('numero_cuenta'):$data->numero_cuenta}}">

                                            @error('numero_cuenta')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="telefono" class="font-weight-bold text-dark">Telefono</label>
                                            <input type="text" name="telefono"
                                                   class="form-control  @error('telefono') is-invalid @enderror"
                                                   placeholder=""
                                                   value="{{old('telefono')?old('telefono'):$data->telefono}}">

                                            @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="email" class="font-weight-bold text-dark">Email</label>
                                            <input type="text" name="email"
                                                   class="form-control  @error('email') is-invalid @enderror"
                                                   placeholder=""
                                                   value="{{old('email')?old('email'):$data->email}}">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif
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
