@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="text-center text-uppercase">Completa tu Perfil de Usuario <small>Animo Queda Poco</small></p>
        <div class="progress">
            <div class="progress-bar bg-success rogress-bar-striped progress-bar-animated" style="width:50%">50%</div>
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
                    <div class="col-md-9 col-sm-12   order-md-2 col-xs-12 t-rform_top">
                        <div class="main-container" style="padding: 25px">
                            <h2 class=" font-weight-bold text-dark titulo-recarga">
                                Provincia del Usuario
                            </h2>
                            <form action="{{route('perfil.paso5')}}" method="get" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="provincia" class="font-weight-semibold text-dark">Provincia *</label>
                                        <select class="form-control @error('provincia') is-invalid @enderror" name="provincia" id="provincia">
                                            <option value="0">Selecciona una Provincia</option>
                                            @forelse($provincia as $parent)
                                                <option value="{{$parent->id}}" {{old('pais') == $parent->id?'selected':''}}>{{$parent->nombre}}</option>
                                            @empty
                                                <option>Lamentablemente no estamos atendiendo todavia a esta Zona (por inicio solo Lima) Proximamente Si llegaremos a todo el peru</option>
                                            @endforelse
                                        </select>
                                        <p class="valid-feedback text-center" role="alert" id="hide-banco_id">
                                            <strong >Selecciona la Provincia donde Vives</strong>
                                            <br>
                                            <strong>Lamentablemente no estamos atendiendo todavia Fuera de Lima Proximamente Si llegaremos a todo el peru</strong>
                                        </p>

                                        @error('provincia')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
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
