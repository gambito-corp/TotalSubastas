@extends('layouts.app')

@section('content')
<!--columns / container-->
<div class="container">
    <div class="row">
        <!-- main content -->
        <div class="col-md col-md-12 mt-5">
            <div class="row bg-dark text-light pt-4 pl-4 pr-4 pb-4" style="border-radius: 10px;">
                <div class="col-md-3 col-sm-12">
                    <img src="./assets/img/image-077.png" width="240px" height="231" alt="" />
                </div>
                <div class="col-md-6 col-sm-12">
                    <h1 class="ml-2">MAZDA 3</h1>
                    <p class="ml-2">2003</p>
                    <!-- content -->
                    <div class="col-md-9 pd-0 m-0 pl-4">
                        <!--  -->
                        <div class="row row-cols-4">
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light p-0 m-0 text-s_gd-sheet">
                                Garantia
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text m-0">
                                    $ 150
                                </button>
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                                Ganador actual
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                    JAV193
                                </button>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row row-cols-4 mt-2">
                            <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                                comision
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                    5 %
                                </button>
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light text-s_gd-sheet">
                                Tipo subasta
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                    subasta
                                </button>
                            </div>
                        </div>
                        <div class="row-cols-2">
                            <div class="col"></div>
                        </div>
                        <div class="row">
                            <div class="row pt-3 row-cols pl-3">
                                <figure>
                                    <svg class="bd-placeholder-img rounded-sm" width="36" height="36" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Example small rounded image: 36x36">
                                        <title>Example small rounded image</title>
                                        <rect width="100%" height="100%" fill="#ffd980"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
                                    </svg>
                                    <span class="ml-2">concedido por rimac seguro</span>
                                    <h5 class="pt-2">AKY-540</h5>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                            <h5>
                                <span> INICIO <br /></span>
                                <span> 7 : 15 pm</span>
                            </h5>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <h3>
                                JAV1019
                            </h3>
                        </div>
                        <div class="col-12">
                            <span class="text-badge_live"> se lleva alexis a </span>
                            <span class="ml-3 pl-3 badge_live"> $ 12 700</span>
                        </div>
                        <div class="col">
                            <span class="text-badge_live"> en 00:04 </span>
                        </div>
                        <div class="col">
                            <div class="progress rounded-pill">
                                <div class="progress-bar data_sheet-live_bg-progress_bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-5">
                            <button class="btn btn-primary btn-block pl-3 rounded-pill badge_btn">
                                <i class="fas fa-gavel fa-rotate-270 pt-2 float-left "></i> $ 12 800
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 justify-content-between">
                <div class=" col col-md-3 order-md-1 live-push_action-ranking">
                    <article class="border-bottom">
                        <h5 class="text-uppercase r-timer_live">Subasta en vivo</h5>
                    </article>
                    <div class="row p-4">
                        <div class="col-12 pt-5 pb-5">
                            <p>

                            </p>
                        </div>

                        <div class="col live-push_auction-timer_bottom">
                            <div class="text-center">
                                <span class=""> <i class="fas fa-heart"> </i></span>
                                <span class="d-block text-center">
                                    <p class="text-dark text text-_to-auction_bottom">123</p>
                                    Me gustan
                                </span>
                            </div>
                        </div>
                        <div class="col live-push_auction-timer_bottom">
                            <div class="text-center">
                                <span class="ml-1"> <i class="fas fa-gavel fa-rotate-270 pr gavel-live"></i></span>
                                <span class="d-block text-center">
                                    <p class="text-dark text text-_to-auction_bottom">24</p>
                                    Ofertas
                                </span>
                            </div>
                        </div>
                        <div class="col live-push_auction-timer_bottom">
                            <div class="text-center">
                                <i class="fas fa-user"> </i>
                                <span class="d-block">
                                    <p class="text-dark text text-_to-auction_bottom">30</p>
                                    Participa<br>ntes
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-5 order-md-2  rounded bg-dark">

                </div>

                <div class="col-md-3 mt-sm-4 order-md-3 live-push_action-ranking">
                    <article class="border-bottom">
                        <h5 class="text-uppercase ranking_live">ranking</h5>
                    </article>
                    <div class="row p-4">
                        <div class="col-12 pt-2 d-flex pb-2  border-bottom">
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Puesto
                            </div>
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Usuario
                            </div>
                            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                                Oferta
                            </div>
                        </div>
                        <div class="row" style="height:200px; overflow: auto;">
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal  ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal  ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal  ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    1
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    Usuario
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                                    $ 12800
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <!--end row-->
            <!--  -->
            <div class="container-fluid pl-0 pr-0">
                @include('assets.footer')
            </div>
            @endsection
        </div>
    </div>

