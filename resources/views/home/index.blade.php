@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row mt-5">
		@php
		$data = [
		'0' => 0,
		'1' => 1,
		'2' => 2,
		'3' => 3,
		'4' => 4
		];
        @endphp        
        <div class="col-md-6  pl-md-0  mb-sm-4 mb-xs-4 col-sm-12 order-md-1 radius">
            <div id="FirstSlide" class="carousel slide first-slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#FirstSlide" data-slide-to="0" class=" indicator "></li>
                    <li data-target="#FirstSlide" data-slide-to="1"></li>
                    <li data-target="#FirstSlide" data-slide-to="2"></li>
                </ol>
                <div class="l_inner"></div>
                <div class="l_inner-ab"></div>
                <div class="carousel-inner slide-border">
                    {{-- //TODO: hACER lOOP --}}
                    <div class="carousel-item active first" data-interval="100000">
                        <span class="text-light pt-1 live-today">
                            Hoy
                        </span>
                        <article class="first-slide">
                            <figure class=" heading-carousel_top text-light  ">
                                <img class="mb-2 logo_top-slide-sg_falabella" src="./assets/img/image-207.png" alt="">
                                <h5 class="">Saga Falabella</h5>
                                <p class="date_top-slide-sg_falabella text-center">20.05.20</p>
                            </figure>
                            <figure class="heading-carousel ">
                                <h1 class="text-uppercase font-weight-bold text-center text-light mt-5">
                                    Gran subasta <br>
                                    10 activos <br>podran ser tuyos
                                </h1>
                                <button class="btn btn-primary mt-5  rounded-pill carousel-btn-look_lote">
                                    <span><i class="fas fa-image ml-2 mr-4"></i></span>
                                    Ver lote
                                    <span class="badge ml-4 badge-button_count_slide">10</span>
                                </button>
                            </figure>
                        </article>
                        <img class="carousel-item-a_imagen" src="./assets/img/image-205.png" height="555px" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6  sec_in-out order-md-2">
            <div class="row bg-y-light  slide-border ">
                <div class="oval third_in-out  mr-5 mt-4"></div>
                <div class=" col ml-3">
                    <article class=" sec-carousel">
                        <p class="carousel-text_item_b-top">¿COMO SUBASTAR?</p>
                        <h2 class="carousel-text_item_b">
                            Te enseñamos a Subastar
                        </h2>
                        <p class="carousel-text_item_b-text">
                            Encuentra oportunidades de ingreso, o a lo mejor un gran
                            auto
                        </p>
                        <p class="carousel-text_item_b-text">para ti y tu familia</p>
                        <button class="btn btn-to_buy text-light pr-4 pl-4 rounded-pill bt-sm carousel-btn_text-success">
                            conoce + <i class="fa fa-long-arrow-right  ml-2" aria-hidden="true"></i>
                        </button>
                    </article>
                    <div class="col-md-7 col-sm-7 float-right grl-slideshow  ">
                        <img src="./assets/img/image-169.png " width="85%" style="height:352px;" class="responsive mt-3 " alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0  d-md-flex  mt-4 order-md-3">
                    <div class="col col-md-11 mb-sm-1 card-slide card-slide_success col-sm-12 p-0  mr-md-4 order-md-1 bg-success_light order-md-1     ">
                        
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
                    </div>
                    <div class="col col-md-11 mb-sm-1 card-slide col-sm-12 ml-md-4 pb-sm-3  order-md-2  bg-primary ">
                        <article>
                            <strong class="text-light d-flex justify-content-start pl-3  gift_card">Regalamos 20$</strong>
                            <p class="text-light d-flex justify-content-start pl-3">
                                Para tu primera oferta !
                            </p>
                            <div class="input-group mb-3 no-border border-0 pr-3 pl-3">
                                <input type="text" class="form-control" placeholder="Ingresa tu email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
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
    <div class="row mt-2">
      @livewire('index.index')
    </div>
    @include('assets.widgets')
    
@endsection
