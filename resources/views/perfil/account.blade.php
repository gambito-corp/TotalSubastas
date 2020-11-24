@extends('layouts.app')
@section('content')
    <body class="bg-darken-light">
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container faq">
                <div class="container">
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-md-3 order-md-1 mb-4  ">
                <!--Accordion wrapper-->
                <div class="text-center">
                    <!-- Accordion card -->

                    <div class="bg-light-card shadow-sm radius" style="padding-top: 25px;">
                        @if (isset(auth()->user()->avatar))
                            @include('assets.imagen', ['carpeta' => 'user', 'id' => auth()->id(), 'ancho' => '90', 'class'=> 'img-circle elevation-2'])
                        @endif
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title font-weight-bold text-dark">{{(auth()->user()->tipo == 'natural')?$data->nombres.' '.$data->apellidos: $data->nombre}}</h5>
                                <p class="card-text">{{Auth::user()->email}}</p>
                                <hr>
                                <a href="{{route('perfil.edit')}}" class="font-weight-semibold"> Editar perfil <i class="fas fa-pencil-alt"></i></a>
                                <hr>
                                <a href="{{route('imagen.perfil')}}" class="font-weight-semibold"> Agregar Imagen de Perfil</a>
                            </div>

                    </div>
                </div>
            </div>
            <!-- main content -->
            <div class="col-md-9 order-md-2">
                <div>
                    <div class="row justify-content-md-center border-bottom">
                        <div class="col-12 col-md-4 col-sm-12 col-xs-12 ml mb-5">
                            <div class="card bg-darken text-light mc-card_top">
                                <div class="card-body">
                                    <p class="card-title card-title--perfil">Registro
                                        <svg class="bi bi-calendar3 float-right mr-3 "
                                             width="22px" height="22px" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                  d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                            </path>
                                        </svg>
                                    </p>
                                    <div class="col-sm-12">
                                        <div class="row text-center">
                                            <div class="col-12 col-sm-6">
                                                <p class="b-title fecha-card-title">{{Auth::user()->created_at->format('d-M-Y')}}</p>

                                                <small class="sm-text_card">Fecha registro </small>
                                            </div>
                                            <div class="col-12 col-sm-6 ">
                                                <p class="b-title fecha-card-title">{{$audit}}</p>
                                                <small class="sm-text_card"> Último ingreso</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-md-4 col-sm-12 col-xs-12 ml mb-5">
                            <div class="card bg-darken text-light mc-card_top">
                                <div class="card-body">
                                    <p class="card-title card-title--perfil" style="margin-bottom: 20px;">Saldo
                                        <i class="fa fa-money-bill-alt float-right mr-3 fa-w-20" style="font-size: 22px;"></i>
                                    </p>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 text-center">
                                                <p class="b-title fecha-card-title">$ {{$balance}} </p>
                                                <small class="sm-text_card">Saldo actual</small>
                                            </div>
                                            <div class="col-12 col-sm-6 text-center">
                                                <p class="b-title fecha-card-title">$ {{$garantia}}</p>
                                                <small class="sm-text_card ">Monto retenido</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-md-4 col-sm-12 col-xs-12 ml mb-5">
                            <div class="card bg-darken text-light mc-card_top">
                                <div class="card-body">
                                    <h5 class="card-title card-title--perfil">Indicadores
                                        <svg aria-hidden="true" width="23px" height="23px"
                                             focusable="false" data-prefix="fal" data-icon="bell" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="svg-inline--fa fa-bell float-right mr-3 fa-w-14 fa-2x">
                                            <path fill="currentColor"
                                                  d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"
                                                  class="float-right mr-3"></path>
                                        </svg>
                                    </h5>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-4 col-xs-2 padding-lr-8">
                                                <p class="b-title  text-center icono-indicadores-perfil"><i class="fas fa-heart "></i></p>
                                                <p class="sm-text_card text-center">{{$likes}} <br> Me gusta</p>
                                                <small class="sm-text_card"></small>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 col-xs-4 padding-lr-8">
                                                <p class="b-title text-center icono-indicadores-perfil"><i class="fas fa-gavel fa-rotate-270"></i>
                                                </p>
                                                <p class="sm-text_card text-center">{{$ofertas}} <br> Ofertas</p>
                                            </div>
                                            <div class="col-12 col-md-5 col-sm-4 col-xs-4 padding-lr-8">
                                                <p class="b-title  text-center icono-indicadores-perfil"><i class="fas fa-user"></i></p>
                                                <p class="sm-text_card text-center">{{$participacion}}<br> Participaciones</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <!--   Level 1: .col-sm-9 -->
                        <!-- Participaciones activas -->
                        <div class="row ">
                            <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5">
                                <h2 class="text-darken pb-3">Participaciones Activas</h2>
                                <div class="row ">
                                    <div class="col">
                                        @forelse($activas as $producto)
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                @isset($producto->Productos->imagen)
                                                    @include('assets.imagen', ['carpeta' => 'producto', 'id' => $producto->Productos->id, 'ancho' => '70'])
                                                @endisset
                                                <div class="media-body pb-4">
                                                    <div class="mt-3 m-acc_text">
                                                        <h5 class="mt-0"> {{$producto->Productos->nombre}} </h5>
                                                        <span>$ {{$producto->Productos->precio}}</span>
                                                    </div>
                                                    <p>fecha en vivo
                                                        : {{$producto->Productos->started_at->format('d-m-y')}}</p>
                                                    <p>fecha registro : {{--$producto->created_at->format('d-m-y')--}}</p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <p class="no-participacion">No hay participaciones activas</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5">
                                <h2 class="text-darken pb-3">Participaciones Pasadas</h2>
                                <div class="row ">
                                    <div class="col">
                                        @forelse($pasadas as $producto)
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <img src="{{asset($producto->Productos->imagen)}}" alt="" width="70"
                                                     height="70" class="mx-2 my-auto">
                                                <div class="media-body pb-4">
                                                    <div class="mt-3 m-acc_text">
                                                        <h5 class="mt-0"> {{$producto->Productos->nombre}} </h5>
                                                        <span>$ {{$producto->Productos->precio}}</span>
                                                    </div>
                                                    <p>fecha en vivo
                                                        : {{$producto->Productos->started_at->format('d-m-y')}}</p>
                                                    <p>fecha registro : {{--$producto->created_at->format('d-m-y')--}}</p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <p class="no-participacion">No hay participaciones pasadas</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5">
                                <h2 class="text-darken pb-3">Vas Ganando</h2>
                                <div class="row ">
                                    <div class="col pl-3 radius">
                                        @forelse($ganando as $producto)
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <img src="{{asset($producto->Productos->imagen)}}" alt="" width="70"
                                                     height="70" class="mx-2 my-auto">
                                                <div class="media-body pb-4">
                                                    <div class="mt-3 m-acc_text">
                                                        <h5 class="mt-0"> {{$producto->Productos->nombre}} </h5>
                                                        <span>$ {{$producto->Productos->precio}}</span>
                                                    </div>
                                                    <p>fecha en vivo
                                                        : {{$producto->Productos->started_at->format('d-m-y')}}</p>
                                                    <p>fecha registro : {{--$producto->created_at->format('d-m-y')--}}</p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <p class="no-participacion">No vas ganando en ninguna subasta</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5">
                                <h2 class="text-darken pb-3">Vehiculos Ganados</h2>
                                <div class="row ">
                                    <div class="col pl-3 radius">
                                        @forelse($ganadas as $producto)
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <img src="{{asset($producto->Productos->imagen)}}" alt="" width="70"
                                                     height="70" class="mx-2 my-auto">
                                                <div class="media-body pb-4">
                                                    <div class="mt-3 m-acc_text">
                                                        <h5 class="mt-0"> {{$producto->Productos->nombre}} </h5>
                                                        <span>$ {{$producto->Productos->precio}}</span>
                                                    </div>
                                                    <p>fecha en vivo
                                                        : {{$producto->Productos->started_at->format('d-m-y')}}</p>
                                                    <p>fecha registro : {{--$producto->created_at->format('d-m-y')--}}</p>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="media bg-light border-bottom border-radius-ts">
                                                <p class="no-participacion">Todavia no ganaste ningún vehículo</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 col-xs-12 m-acc_text pt-5 pr-0 pl-0">
                            <h2 class="text-darken pb-3 border-top pt-5">Garantias Depositadas</h2>
                            <div class="col-12 pl-0 pr-0 col-md-12 col-sm-12 col-xs-12 live-push_action-floating">
                                <div class="mb-5 scroll-account">
                                    @forelse($garantiaDetail as $detail)

                                        <div class="col-12 pt-2 d-flex pb-2  border-bottom container-garantia">
                                            <div class="col-md-4 font-weight-semibold flex-center">
                                                {{$detail->descripcion}}
                                            </div>
                                            <div class="col-md-2 font-weight-normal flex-center">
                                                {{$detail->tipo}}
                                            </div>
                                            <div class="col-md-2  font-weight-normal flex-center">
                                                {{$detail->created_at->format('d-M-Y')}}
                                            </div>
                                            <div class="col-md-2 font-weight-normal  ranking_to-auction_text flex-center" style="color: #E7D9FF;">
                                                $ {{$detail->monto}}
                                            </div>
                                            <div
                                                class="col-md-2  font-weight-normal  ranking_to-auction_text flex-center" style="color: #E7D9FF;">
                                                {{$detail->aprobado?'Aprobado':'Esperando Confirmacion'}}
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                            <h2 class="text-darken">Ho hay un registro</h2>
                                        </div>
                                    @endforelse

                                    <div class="btn-ver-mas-garantia" style="display: none;">Ver más</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-sm-4">
            <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
                <article>
                    <a href="/">
                        <img src="./assets/img/image-368.png" class="img-fluid" alt=""/>
                    </a>
                </article>
            </div>

            <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
                <article>
                    <img src="./assets/img/image-368-1.png" alt=""/>
                </article>
            </div>
        </div>
@endsection
