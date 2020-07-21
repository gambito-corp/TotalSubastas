@extends('layouts.app')
@section('content')
<body class="bg-darken-light">
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container faq">
                <div class="container">
                    <!-- <h1 class="font-weight-bold text-light text-uppercase">
          Preguntas <br> frecuentes
      </h1>
    
      <p class="text-light text-capitalize">conoce las bases para realizar una subasta correcta!</p>
      -->
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

                    <div class="bg-light-card shadow-sm radius">
                        <img src="{{asset('/assets/img/image-173.png')}}" class=" mt-4" with="" alt="..." style="width: 90px;
                                    height: 90px; border-radius:50%;">
                        <div class="card-body pl-0 pr-0">
                            <h5 class="card-title font-weight-bold text-dark">Card title</h5>
                            <p class="card-text">email@example.com</p>
                            <p>
                                <span><i class=" fas fa-star bg-rating_star"></i></span>
                                <span><i class=" fas fa-star bg-rating_star"></i></span>
                                <span><i class=" fas fa-star bg-rating_star"></i></span>
                                <span><i class=" fas fa-star bg-rating_star"></i></span>
                                <span><i class="darken-flat fas fa-star"></i></span>
                            </p>
                            <p class="font-weight-bold text-dark">3 pts</p>
                            <hr>
                            <a href="./Profile-edit.html"> editar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->
            <div class="col-md-9 order-md-2">
                <div class="row justify-content-md-center border-bottom mb-5">
                    <div class="col-12 col-md-4 col-sm-12 col-xs-12 ml mb-5">
                        <div class="card bg-darken text-light mc-card_top">
                            <div class="card-body">
                                <p class="card-title">Registro <svg class="bi bi-calendar3 float-right mr-3 "
                                        width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                        </path>
                                    </svg></p>
                                <div class="col-sm-12">
                                    <div class="row text-center">
                                        <div class="col-12 col-sm-6">
                                            <p class="b-title">30 abril 2019</p>

                                            <small class="sm-text_card">fecha Registro </small>
                                        </div>
                                        <div class="col-4 col-sm-6 ">
                                            <p class="b-title">05 Mayo 2019</p>
                                            <small class="sm-text_card"> ultimo ingreso</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-md-4 col-sm-12 col-xs-12 ml mb-5">
                        <div class="card bg-darken text-light mc-card_top">
                            <div class="card-body">
                                <h5 class="card-title ">Saldo </h5>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 text-center">
                                            <p class="b-title">S/. 600 </p>
                                            <small class="sm-text_card">Saldo actual</small>
                                        </div>
                                        <div class="col-12 col-sm-6 text-center">
                                            <p class="b-title">S/. 150</p>
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
                                <h5 class="card-title">Indicadores<svg aria-hidden="true" width="20px" height="20px"
                                        focusable="false" data-prefix="fal" data-icon="bell" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="svg-inline--fa fa-bell float-right mr-3 fa-w-14 fa-2x">
                                        <path fill="currentColor"
                                            d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"
                                            class="float-right mr-3"></path>
                                    </svg></h5>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-4 col-xs-2">
                                            <p class="b-title  text-center"><i class="fas fa-heart "></i></p>
                                            <p class="sm-text_card text-center">234 <br> Me gusta</p>
                                            <small class="sm-text_card"></small>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4 col-xs-4">
                                            <p class="b-title text-center"><i class="fas fa-gavel fa-rotate-270"></i>
                                            </p>
                                            <p class="sm-text_card text-center">4 <br> Ofertas</p>
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4 col-xs-4">
                                            <p class="b-title  text-center"><i class="fas fa-user"></i></p>
                                            <p class="sm-text_card text-center">23 Participaciones</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <!--   Level 1: .col-sm-9 -->
                    <!-- Participaciones activas -->
                    <div class="row ">
                        <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5 pl-0">
                            <h2 class="text-darken pb-3">Participaciones Activas</h2>
                            <div class="row ">
                                <div class="col">
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3  ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5 pr-0">
                            <h2 class="text-darken pb-3">Participaciones Activas</h2>
                            <div class="row ">
                                <div class="col">
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5 pl-0">
                            <h2 class="text-darken pb-3">Lotes Ganados</h2>
                            <div class="row ">
                                <div class="col pl-3 radius">
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                    <div class="media bg-light border-bottom">
                                        <svg class="bd-placeholder-img mr-3 ml-3 mt-3" width="70" height="70"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img" aria-label="Placeholder: 70x70">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">

                                            </text>
                                        </svg>
                                        <div class="media-body pb-4">
                                            <div class="mt-3 m-acc_text">
                                                <h5 class="mt-0"> kia rio 2007 </h5>
                                                <span>$ 23 400</span>
                                            </div>
                                            <p>fecha en vivo : 12/04/20</p>
                                            <p>fecha registro : 10/04/20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-sm-12 col-xs-12 m-acc_text pt-5 pr-0">
                            <h2 class="text-darken pb-3">Puntaje</h2>
                            <div class="row row-cols-2 m-acc_points mr-0 ml-0">
                                <div class="col-12 border-bottom  p-5 m-acc_char"> 3 pts</div>
                                <div class="col-6 p-5 border-right m-acc_points-bottom">
                                    Poisitivo
                                    <p class="p-2">40.8%</p>
                                </div>
                                <div class="col-6 p-5 m-acc_points-bottom">
                                    Negativo
                                    <p class="p-2">59.2%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-sm-12 col-xs-12 m-acc_text pt-5 pr-0 pl-0">
                        <h2 class="text-darken pb-3 border-top pt-5">Movimientos</h2>
                        <div class="col-12 pl-0 pr-0 col-md-12 col-sm-12 col-xs-12 live-push_action-floating">
                            <article>
                                <!-- <h5 class="text-uppercase ranking_live">ranking</h5>-->
                            </article>
                            <!-- <div class="col-12 pt-2 d-flex pb-2  border-bottom">
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Puesto
                            </div>
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Usuario
                            </div>
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Oferta
                            </div>
                            </div> -->
                            <div class="row mb-5 scroll-account">
                                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                    <div class="col-md-4 text-light font-weight-normal">
                                        Abono desde bcp
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        Ingreso
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        10 mayo 2020
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        $ 100
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        <i class="fas fa-download"></i> <span class="font-weight-light"></span>
                                    </div>
                                </div>
                                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                    <div class="col-md-4 text-light font-weight-normal">
                                        Abono desde bcp
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        Ingreso
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        10 mayo 2020
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        $ 100
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        <i class="fas fa-download"></i> <span class="font-weight-light"></span>
                                    </div>
                                </div>
                                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                    <div class="col-md-4 text-light font-weight-normal">
                                        Abono desde bcp
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        Ingreso
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        10 mayo 2020
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        $ 100
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        <i class="fas fa-download"></i> <span class="font-weight-light"></span>
                                    </div>
                                </div>
                                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                    <div class="col-md-4 text-light font-weight-normal">
                                        Abono desde bcp
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        Ingreso
                                    </div>
                                    <div class="col-md-2 text-light font-weight-normal">
                                        10 mayo 2020
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        $ 100
                                    </div>
                                    <div
                                        class="col-md-2 text-light font-weight-normal text-to_best-auction ranking_to-auction_text">
                                        <i class="fas fa-download"></i> <span class="font-weight-light"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center pt-3 pb-3" style="background-color:#8F79D4; ">
                                    load more
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
                    <!-- <h2 class="ml-5">Credito vehicular</h2>
                    <p class="ml-5">
                        Te ofrecemos asesoria especializada, si eres cliente de
                        totalsubastas contactanos
                    </p> -->
                    <a href="/">
                        <img src="./assets/img/image-368.png" class="img-fluid" alt="" />
                    </a>
                    <!-- <a href="{{Route('creditos')}}" class="text-light">
                        <button class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
                            Aqu&iacute;
                        </button>
                    </a> -->
                </article>
            </div>
        
            <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
                <article>
                    <!-- <h2 class="ml-5">Asesoria legal?</h2>
                    <p class="ml-5">
                        Te ofrecemos asesoria especializada, si eres cliente de
                        totalsubastas contactanos
                    </p> -->
                    <img src="./assets/img/image-368-1.png" alt="" />
                    <!-- <a href="Route{{route('asesoria')}}" class="text-light">
                        <button  class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
                            Aqu&iacute;
                        </button>
                    </a> -->
                </article>
            </div>
        </div>
        
@endsection
