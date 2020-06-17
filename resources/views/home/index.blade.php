@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner redondo-5">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="rounded-circle">
                                    <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="circulo" width="100">
                                </div>
                                <p>Saga Falabella</p>
                                <p>26.05.20</p>
                                <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                                <a href="#" class="btn btn-primary redondo">
                                    <i class="fa fa-image"></i>
                                    ver lote <span class="numero">10</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="circulo">
                                    <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="circulo" width="100">
                                </div>
                                <p>Saga Falabella</p>
                                <p>26.05.20</p>
                                <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                                <a href="#" class="btn btn-primary redondo">
                                    <i class="fa fa-image"></i>
                                    ver lote <span class="numero">10</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="circulo">
                                    <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="circulo" width="100">
                                </div>
                                <p>Saga Falabella</p>
                                <p>26.05.20</p>
                                <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                                <a href="#" class="btn btn-primary redondo">
                                    <i class="fa fa-image"></i>
                                    ver lote <span class="numero">10</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="circulo">
                                    <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="circulo" width="100">
                                </div>
                                <p>Saga Falabella</p>
                                <p>26.05.20</p>
                                <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                                <a href="#" class="btn btn-primary redondo">
                                    <i class="fa fa-image"></i>
                                    ver lote <span class="numero">10</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="circulo">
                                    <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="circulo" width="100">
                                </div>
                                <p>Saga Falabella</p>
                                <p>26.05.20</p>
                                <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                                <a href="#" class="btn btn-primary redondo">
                                    <i class="fa fa-image"></i>
                                    ver lote <span class="numero">10</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 bg-Amarillo redondo-px-20">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                ¿como subastar?
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <h2> Te enseñamos a Subastar</h2>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                Encuentra oportunidades de ingreso, o a lo mejor tu gran auto para ti y tu familia
                                            </div>
                                        </div>
                                        <div class="row my-5">
                                            <div class="col-md-12">
                                                <a href="#" class="btn btn-success redondo">Conoce + <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div></div>
                                    <div class="col-md-6">
                                        <img src="{{asset('img/mujer.png')}}" alt="" class="alto-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                            <div class="col bg-success redondo-px-20 mr-3">
                                <h6>Documentación a la mano de cada subasta</h6>
                                <p>pdf, 125Mb, Sept 9 at 2:03 pm </p>
                                <hr>
                                <div class="text-center">
                                    <p>
                                        <i class="fa fa-download"></i>
                                        Descargalo
                                    </p>
                                </div>
                            </div>

                            <div class="col bg-primary redondo-px-20 ml-3">
                                a
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @include('assets.breadcrumb-index')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-light redondo-px-20 mr-4">a</div>
{{--            <div class="col-md-1"></div>--}}
            <div class="col-md-8 bg-light redondo-px-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col pt-2">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <p><b class="mr-3">Autos</b> <span class="navbar-text">hay 52 Resultados </span></p>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <b>Filtros</b> <span class="bg-info redondo-px-40 text-light">4 </span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <b>Ordenar Por</b>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#"><i class="fa fa-check"></i> Mejor Filtro</a>
                                                <a class="dropdown-item" href="#">Precio Bajo</a>
                                                <a class="dropdown-item" href="#">Precio Alto</a>
                                                <a class="dropdown-item" href="#">Fecha</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

