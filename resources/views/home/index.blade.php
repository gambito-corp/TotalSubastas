@extends('layouts.app')
@section('content')
    <div class="container .container-slider-2">
        <div class="row mt-5 container-slider">
            <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
                <ol class="carousel-indicators">
                    @forelse($slide as $data)
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @empty
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @endforelse
                </ol>

                <div class="carousel-inner">
                    @forelse($slide as $data)
                    <div class="carousel-item {{($loop->index == 0)?'active':''}}">
                        @include('assets.imagen', ['carpeta' => 'slide', 'id' => $data->id, 'alto' => '531', ])
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <img class="carousel-item-a_imagen" src="./assets/img/banner1.png" height="531px" alt="slider">
                    </div>
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-md-6  sec_in-out order-md-2">
                <div class="row slide-border ">
                    <img class="carousel-item-a_imagen" src="./assets/img/banner2.png" height="352px" alt="...">
                </div>
                <div class="row">
                    <div class="col-md-6 p-0  d-md-flex  mt-4 order-md-3">
                        <div class="col col-md-11 mb-sm-1 card-slide card-slide_success col-sm-12 p-0  mr-md-4 order-md-1 bg-success_light order-md-1 banner3">
                            <article class="dwnld-card">
                            <strong class="text-light d-flex justify-content-center pt-3 pr-2">Documentación a la mano <br> de
                                cada
                                subasta
                            </strong>
                            <p class="text-light d-flex justify-content-center pt-2 pr-2 border-bottom pl-2 pr-2 pb-2 text-doc_saga-fallabella">
                                PDF, 125 MB, Sep 8 at 2:03 pm
                            </p>
                            <span class="d-flex justify-content-center text-light pb-3">
                                <span class="f-500">Download</span>
                            </span>
                        </article>
{{--                            <img class="carousel-item-a_imagen" src="./assets/img/banner3.png" height="182px" width="385px" alt="...">--}}
                        </div>
                        <div class="col col-md-11 mb-sm-1 card-slide col-sm-12 ml-md-4 pb-sm-3  order-md-2  bg-primary banner4">
                            <article>
                                <strong class="text-light d-flex justify-content-start pl-3  gift_card">Regalamos 20$</strong>
                                <p class="text-light d-flex justify-content-start pl-3">
                                    Para tu primera oferta !
                                </p>
                                <div class="input-group mb-3 no-border border-0 pr-3 pl-3">
                                    <input type="text" class="form-control" placeholder="Ingresa tu email" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary border-0 bg-light" type="button" id="button-addon2">
                                            <i class="fas fa-paper-plane text-primary"></i>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2">
            @livewire('index.index')
        </div>
    </div>
@include('assets.widgets')
@endsection
