@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container faq">
                <div class="container">
                    <h1 class="font-weight-bold text-light text-uppercase">
                        Recargar Cuenta
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
                            Recarga de Cuenta
                        </h2>
                        <form action="{{route('recargar')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div>
                                    <div class="row">
                                        <div class="custom-control col-md-12">
                                            <select name="banco_id" id="banco" class="form-control">
                                                @forelse($bancos as $banco)
                                                    <option value="{{$banco->id}}" {{$banco->id == old('banco_id')?'selected':''}}>
                                                        {{$banco->nombre}}
                                                    </option>
                                                @empty
                                                    <option value="">
                                                        No Existen Bancos
                                                    </option>
                                                @endforelse
                                            </select>
                                            @error('bancos_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'monto',
                                                'tag'       => 'Monto',
                                                'tipo'      => 'text',
                                                'place'     => 'Monto',
                                                'require'   => true,
                                                'valor'     => old('monto'),
                                                'edit'      => true

                                                ])
                                        </div>
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'tipo',
                                                'tag'       => 'Tipo de Deposito',
                                                'tipo'      => 'text',
                                                'place'     => 'Tipo de Deposito',
                                                'require'   => true,
                                                'valor'     => old('tipo'),
                                                'edit'      => true

                                                ])
                                        </div>
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'motivo',
                                                'tag'       => 'Motivo de Deposito',
                                                'tipo'      => 'text',
                                                'place'     => 'Motivo de Deposito',
                                                'require'   => true,
                                                'valor'     => old('motivo'),
                                                'edit'      => true

                                                ])
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'cuenta',
                                                'tag'       => 'Numero de Cuenta',
                                                'tipo'      => 'text',
                                                'place'     => 'Numero de Cuenta',
                                                'require'   => true,
                                                'valor'     => old('cuenta'),
                                                'edit'      => true

                                                ])
                                        </div>
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'transaccion_banco',
                                                'tag'       => 'Id de Transferencia',
                                                'tipo'      => 'text',
                                                'place'     => 'Id de Transferencia',
                                                'valor'     => old('transaccion_banco'),
                                                'edit'      => true

                                                ])
                                        </div>
                                        <div class="custom-control col-md-4">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'abono_at',
                                                'tag'       => 'Fecha y hora de Deposito',
                                                'tipo'      => 'datetime-local',
                                                'place'     => 'Fecha y hora de Deposito',
                                                'require'   => true,
                                                'valor'     => old('abono_at'),
                                                'edit'      => true
                                                ])
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control col-md-6">
                                            <label for="descripcion">Descripcion del Deposito</label>
                                            <textarea name="descripcion" id="descripcion" cols="10" rows="2" class="form-control" required>{{old('descripcion')}}</textarea>
                                            @error('descripcion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="custom-control col-md-6">
                                            @include(
                                                'home.assets.text', [
                                                'nombre'    => 'boucher',
                                                'tag'       => 'Imagen del Boucher',
                                                'tipo'      => 'file',
                                                'require'   => true
                                                ])
                                        </div>
                                    </div>
                                </div>
                            <div class="row mx-lg-n5 mt-5">
                                <div class="col py-3 ml-5 px-lg-5">
                                    <button class="btn btn-block btn-to_buy pl-5 pr-5 text-light rounded-pill">
                                        Guardar cambios
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