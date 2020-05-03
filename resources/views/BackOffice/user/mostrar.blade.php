@extends('layouts.BackOfice')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.sesion')
            <div class="card">
                <div class="card-header">{{ __('Perfil de Usuario') }}</div>
                <div class="container">
                    <div class="card-group mt-3">

                        <div class="card text-center border-info">
                            <div class="card-body">
                                <h4 class="card-title">{{ $usuario->name.' '.$usuario->surname }}</h4>
                                <p class="card-text">{{$usuario->descripcion}} </p>
                                <p class="card-text">{{$usuario->email}} </p>
                                <p class="card-text">Creado en: {{$usuario->created_at}} </p>
                                <p class="card-text">Actualizado en: {{$usuario->updated_at}} </p>
                                <p class="card-text">Eliminado en: {{$usuario->deleted_at}} </p>
                                <img src="{{route('user.imagen',['filename' => $usuario->imagen])}}" alt="">

                            </div>
                        </div>


                    </div>
                  </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
