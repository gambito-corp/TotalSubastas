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
        <!-- slider -->
        <div class="div-carousel col-md-6  pl-md-0  mb-sm-4 mb-xs-4 col-sm-12 order-md-1">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                 @foreach( $data as $dat )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                 @endforeach
                </ol>
               
                <div class="div-carousel carousel-inner" role="listbox">
                  @foreach( $data as $dat )
                     <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                     <img class="d-block img-fluid" src="{{asset('assets\img\image-205.png')}}" alt="">
                            <div class="sec-carousel"> <!--carousel-caption d-none d-md-block-->
                                <img class="logo-carousel" src="{{asset('assets/img/empresas/bancoFalabella.jpg')}}" alt="">
                                <h3>Hola Mundo {{$loop->index}}</h3>
                                <p>Descripcion de imagen {{$loop->index}}</p>
                            </div>
                     </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>



        <div class="col-md-6  sec_in-out order-md-2">
            <div class="row color_marca ">                
                <article class="col-md-4">
                    <p class="txt-overtitle">¿COMO SUBASTAR?</p>
                    <h2 class="txt-title">
                        Te enseñamos a Subastar
                    </h2>
                    <p class="">
                        Encuentra oportunidades de ingreso, o a lo mejor un gran auto
                    </p>
                    <p class="">para ti y tu familia</p>
                    <button class="btn btn-success text-light px-4 rounded-pill btn-small">
                        conoce +
                        <i class="fa fa-long-arrow-right  ml-2" aria-hidden="true"></i>
                    </button>
                </article>
                <div class="col-md-6 col-sm-7 img-position">
                    <img src="{{asset('assets\img\image-169.png')}}"  class="responsive mt-3 " alt=""> 
                </div>                
            </div>
            
            <div class="row">
                <div class="col-md-6 p-0  d-md-flex  mt-4 order-md-3">
                    <div class="dwnld-card col-md-11 col-sm-12 p-0  mr-md-4 order-md-1 bg-success order-md-1">
                        <!--<img class="pt-3" src="assets\img\File.svg" alt="">-->
                        <article>
                            <strong class="dwnld-txt-title text-light d-flex justify-content-center pt-3 pr-2">
                                Documentación a la mano
                                <br>
                                de cada subasta
                            </strong>
                            <p class="text-light d-flex justify-content-center pt-2 pr-2 border-bottom pl-2 pr-2 pb-2 text-doc_saga-fallabella">
                                PDF, 125 MB, Sep 8 at 2:03 pm
                            </p>
                            <span class="d-flex justify-content-center text-light pb-3">
                                <svg class="bi bi-download  mt-1 mr-2 fa-download" width="16px" height="16px" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z">
                                    </path>
                                    <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z">
                                    </path>
                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z">
                                    </path>
                                </svg>
                                <span class="f-500">Download</span>
                            </span>
                        </article>
                    </div>
                    <div class="prom-card col col-md-11 mb-sm-1 card-slide col-sm-12 ml-md-4 pb-sm-3  order-md-2  bg-primary ">
                        <article>
                            <strong class="prom-card-txt text-light d-flex justify-content-start pl-3  gift_card">Regalamos 20$</strong>
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
        </div>
    </div>
</div>
    
        @livewire('index.index')
    
@endsection
