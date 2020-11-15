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
                            Distrito del Usuario
                        </h2>
                        <form action="{{route('perfil.paso6')}}" method="get" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="distrito" class="font-weight-bold text-dark">Distrito *</label>
                                    <select class="form-control @error('distrito') is-invalid @enderror" name="distrito" id="distrito">
                                        <option value="0">Selecciona una Distrito</option>
                                        @forelse($distrito as $parent)
                                            <option value="{{$parent->id}}" {{old('pais') == $parent->id?'selected':''}}>{{$parent->nombre}}</option>
                                        @empty
                                            <option>No hay Distrito Crea uno</option>
                                        @endforelse
                                    </select>

                                    @error('distrito')
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
