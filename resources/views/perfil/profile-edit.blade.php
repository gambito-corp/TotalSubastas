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
                        <form action="{{route('perfil.update')}}" method="post" enctype="multipart/form-data">
                            @csrf @method('PATCH')
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
                                    @if(auth()->user()->completo == false)
                                    @livewire('form.direccion')
                                    <div class="row">
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
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
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
                                        <div class="form-group col-md-3">
                                            <label for="banco_id" class="font-weight-bold text-dark">Banco del Usuario</label>
                                            <select name="banco_id" id="banco_id" class="form-control @error('banco_id') is-invalid @enderror">
                                                @forelse($bancos as $banco)
                                                    <option value="{{$banco->id}}">{{$banco->siglas}}</option>
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
                                            <input type="text" name="numero_cuenta" class="form-control  @error('numero_cuenta') is-invalid @enderror" placeholder="">

                                            @error('numero_cuenta')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="genero" class="font-weight-bold text-dark">Genero</label>
                                            <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                            </select>

                                            @error('genero')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="estado_civil" class="font-weight-bold text-dark">Estado Civil</label>
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
                                        {{$data->dni_front?'':''}}
                                        <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'2':'4'}}">
                                            <label for="digito_documento" class="font-weight-bold text-dark">Digito de DNI</label>
                                            <input type="text" name="digito_documento" class="form-control  @error('digito_documento') is-invalid @enderror" placeholder="">

                                            @error('digito_documento')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'3':'4'}}">
                                            <label for="dni_front" class="font-weight-bold text-dark">Documento Delante</label>
                                            <input type="file" name="dni_front" class="form-control  @error('dni_front') is-invalid @enderror" placeholder="">

                                            @error('dni_front')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-{{($data->dni_front && $data->dni_back)?'3':'4'}}">
                                            <label for="dni_back" class="font-weight-bold text-dark">Documento Atras</label>
                                            <input type="file" name="dni_back" class="form-control  @error('dni_back') is-invalid @enderror" placeholder="">

                                            @error('dni_back')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @isset($data->dni_front)
                                        <div class="form-group col-md-2">
                                            <label for="dni_back" class="font-weight-bold text-dark">Documento Delante</label>

                                        </div>
                                        @endisset
                                        @isset($data->dni_back)
                                        <div class="form-group col-md-2">
                                            <label for="dni_back" class="font-weight-bold text-dark">Documento Atras</label>

                                        </div>
                                        @endisset
                                    </div>
                                @endif
                                </div>
                            @else
                                Adios
                            @endif
                            <div class="row mx-lg-n5 mt-5">
                                <div class="col py-3 ml-5 px-lg-5">
                                    <button class="btn btn-block btn-to_buy pl-5 pr-5 text-light rounded-pill">
                                        Guardar cambios
                                    </button>
                                </div>
                                @if(auth()->user()->completo == true)
                                <div class="col py-3 ml-5 px-lg-5">
                                    <button class="btn btn-block btn-to_buy pl-5 pr-5 text-light rounded-pill">
                                        Agregar Direccion (pendiente)
                                    </button>
                                </div>
                                @endif
                                <div class="col py-3 px-lg-5">
                                    <button class="btn btn-block btn-outline-primary pl-5 pr-5 rounded-pill">
                                        cambiar contrase&ntilde;a (pendiente)
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <img src="" alt="">
                </div>
            </div>
            <div class="row mb-sm-4">
                <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
                    <article>
                        <a href="/">
                            <img src="{{asset('img/image-368.png')}}" class="img-fluid" alt=""/>
                        </a>
                    </article>
                </div>
                <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
                    <article>
                        <img src="{{asset('img/image-368-1.png')}}" alt=""/>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection
