@extends('layouts.app')

@section('content')

<!-- subastas container d. -->
<div class="container">
    <div class="row main-container mb-5 mt-5">
        <div class="col-sm-12 mt-5 mb-5">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-md-9 col-sm-12 col-xs-12 ml-4">
                            <article>
                                <figure>
                                    <svg class="bd-placeholder-img rounded-sm" width="36" height="36" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Example small rounded image: 36x36">
                                        <title>Example small rounded image</title>
                                        <rect width="100%" height="100%" fill="#ffd980"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
                                    </svg>
                                    <h1 class="font-weight-bold">MAZDA 3</h1>
                                    <h3>2003</h3>
                                </figure>
                                <ul class="nav justify-content-end">
                                    <li class="nav-item text-light_darken mr-2">
                                        <span class="mr-2 heart"> 234</span>
                                    </li>
                                    <li class="nav-item text-light_darken mr-4">
                                        <span id="hammer" class="mr-2"> <i class="fas  fa-gavel fa-rotate-270 ml-2"></i> 4</span>
                                    </li>
                                    <li class="nav-item text-light_darken mr-4">
                                        <span class="mr-2"><i class="fas fa-user mr-2"></i>23</span>
                                    </li>
                                </ul>
                                <hr class="my-4" />
                            </article>
                            <div class="col-md-12 col-md-12 col-sm-12  ">
                                <div class="jumbotron auction-jumbotron mr-2 p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col pt-3 ">
                                                <p class="title-d_sheet-jumb text-center">cierra en</p>
                                                <div class="d-flex">
                                                    <p class="title-d_sheet-sp mr-3"> 12 <br> <span class="jumb-title_count-bottom"> hor </span>
                                                    </p> : <p class="title-d_sheet-sp mr-3 ml-3"> 43 <br><span class="jumb-title_count-bottom">
                                                            min </span></p> : <p class="title-d_sheet-sp mr-3 ml-3">12 <br> <span class="jumb-title_count-bottom"> seg </span></p>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col pt-3">
                                                <p class="title-d_sheet-jumb text-center">fecha en vivo</p>
                                                <span class="title-d_sheet-sp">Mayo</span> <span class="title-d_sheet-sp">29 <br> </span>
                                                <span class="title-d_sheet-sp">7:15 pm </span> <br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12  pd-0 m-0">
                                    <!--  -->
                                    <div class="row row-cols-4 ">
                                        <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 p-0 m-0 text-s_gd-sheet">
                                            Garantia
                                        </div>
                                        <div class="col-12  col-md-3 col-sm-12 col-xs-12">
                                            <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text m-0">$
                                                150</button>
                                        </div>
                                        <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                                            Ganador actual
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-12 col-xs-12 ">
                                            <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text "> JAV193
                                            </button>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="row row-cols-4 mt-2">
                                        <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                                            comision
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                            <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text "> 5
                                                %</button>
                                        </div>
                                        <div class="col-12 col-md-3  text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                                            Tipo subasta
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                                            <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text"> subasta
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-2">
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <button class="btn btn-outline-dark rounded-pill pr-4 pl-4 btn-to_action-bottom">
                                            $ 3500 actual
                                        </button>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-primary rounded-pill pr-4 btn-to_action-bottom text-light" href="./live.html"><i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i> Participar </a>
                                    </div>
                                </div>
                                <div class="form-check pt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                    <label class="form-check-label" for="defaultCheck1">
                                        Acepto los terminos y condiciones
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-none d-sm-none d-md-block">
                            <article class="thumbs_auction-md">
                                <figure>
                                    <div class="mb-3 text-center">
                                        <svg id="i-chevron-top" href="#auction-control" role="button" data-slide="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 20 L16 8 2 20"></path>
                                        </svg>
                                    </div>

                                    <fieldset class="thumbs_auction">
                                        <img class="rounded thumbs_auction-img  p-1" data-target='#auction-control' data-slide-to='0' src="./assets/img/thumbs/image-074.png" alt="">
                                        <img class="rounded thumbs_auction-img p-1" data-target='#auction-control' data-slide-to='1' src="./assets/img/thumbs/image-075.png" alt="">
                                        <img class="rounded thumbs_auction-img p-1" data-target="#auction-control" data-slide-to='2' src="./assets/img/thumbs/image-076.png" alt="">

                                    </fieldset>
                                    <div class=" text-center mt-3">
                                        <svg id="i-chevron-bottom" href="#auction-control" role="button" data-slide="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 12 L16 24 2 12"></path>
                                        </svg>
                                    </div>
                                    <div class="display-1 d-flex justify-content-center text-center caret-play_auction-gallery">
                                        <ul class="nav  ml-2 mt-4">
                                            <li>
                                                <a class="text-darken"> <i class="fas fa-caret-right ml-1"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                            </article>

                        </div>
                        <!-- Mobile version -->

                    </div>
                    <div class="col-md col-md-9"></div>
                </div>
                <div class="col-md col-12 col-sm-12 col-xs-12 pt-5 pr-4 pl-5" id="auction-img_d">
                    <div class="bd-example ">
                        <div id="auction-control" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/img/image-077.png" width="100%" height="400">
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text>
                                    </svg>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text>
                                    </svg>
                                </div>
                            </div>
                            <!--  <a class="carousel-control-prev" href="#auction-control" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#auction-control" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>-->
                        </div>
                    </div>
                    <div class="col-md-2 d-md-none d-flex d-flex justify-content-center mt-5">
                        <article>
                            <div class=" text-center mt-3 mb-3 auction-chevron_right">
                                <svg class="bi bi-chevron-right" href="#auction-control" role="button" data-slide="next" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <div class=" text-center mt-3 auction-chevron_left">
                                <svg class="bi bi-chevron-left" href="#auction-control" role="button" data-slide="prev" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </div>
                            <figure>

                                <fieldset class="thumbs_auction">
                                    <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='0' src="./assets/img/thumbs/image-074.png" alt="">
                                    <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='1' src="./assets/img/thumbs/image-075.png" alt="">
                                    <img class="rounded pl-1 thumbs_auction-img" data-target="#auction-control" data-slide-to='2' src="./assets/img/thumbs/image-076.png" alt="">
                                </fieldset>

                                <div class="display-1 d-flex justify-content-center text-center caret-play_auction-gallery">
                                    <ul class="nav  ml-2 mt-4">
                                        <li>
                                            <a class="text-darken"> <i class="fas fa-caret-right ml-1"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                        </article>

                    </div>
                </div>
            </div>
        </div>
        <!--
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" data-whatever="@mdo">Open modal for @mdo</button>
      <div class="modal fade " id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-modal="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  -->
    </div>
    <!-- container -->
    <!-- End Navbar -->

    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-md-3 order-md-2 mb-4 ">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="ofertas" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card side-nav">
                        <!-- Card header -->
                        <a data-toggle="collapse" data-parent="#ofertas" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="border-bottom">
                            <div class="card-header car-side-nav_header text-dark d-flex justify-content-between border-bottom  collapsed border-0" role="tab" id="headingOne1">

                                <p class="mb-0 car-side-nav_title text-dark  ">
                                    solicita una vista
                                </p>
                                <svg class="bi bi-calendar3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            </div>
                        </a>
                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body ">
                                <div class="col d-flex justify-content-between  mt-2">
                                    <p class="car-side-nav_bp"> Puedes venir al almacén central, solicita una visita aquí: </p>
                                </div>
                                <form class=" d-block  mb-3">
                                    <div class="form-group  mb-3">
                                        <label class="tex-dark font-weight-bold">fecha</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-groupmb-3">
                                        <label class="tex-dark font-weight-bold">hora </label>
                                        <input type="time" class="form-control">
                                    </div>
                                    <div class="form-group  mb-3 d-flex justify-content-center ">
                                        <button type="button" class="btn mt-3 btn-primary rounded-pill" value="solicitar">
                                            solicitar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion md-accordion mt-4" id="ofertas" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card side-nav">
                        <!-- Card header -->
                        <a data-toggle="collapse" data-parent="#ofertas" href="#collapse2" aria-expanded="true" aria-controls="collapse2" class="border-bottom ">
                            <div class="card-header car-side-nav_header text-dark d-flex justify-content-between border-bottom  collapsed border-0" role="tab" id="headingOne1">

                                <p class="mb-0 car-side-nav_title text-dark ">
                                    ofertas
                                </p>
                                <i class="fas fa-gavel fa-rotate-270 "></i>
                            </div>
                        </a>
                        <!-- Card body -->
                        <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="row ">
                                <div class="col-12 pt-2 pb-2 d-flex  ">
                                    <div class="col-md-4 text-to_title-auction_live ">
                                        usuario
                                    </div>
                                    <div class="col-md-4 text-to_title-auction_live">
                                        fecha
                                    </div>
                                    <div class="col-md-4 text-to_title-auction_live">
                                        monto
                                    </div>
                                </div>

                                <div class="col-12 pt-2 d-flex pb-2 border-bottom border-top">
                                    <div class="col-md-4 text-darken text-auction_live ranking-side_nav">
                                        Usuario
                                    </div>
                                    <div class="col-md-4 text-darken text-auction_live">
                                        25.05.20
                                    </div>
                                    <div class="col-md-4 text-darken text-auction_live text-to_best-auction ranking_to-auction_text">
                                        $ 12800
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion wrapper -->
            </div>
            <div class="col-md-9 order-md-1 ">
                <div class="row main-container ">
                    <div class="col-md col-md-12 col-lg-12   mt-0 pt-2 data_sheet-d">
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-12 col-xs-12 pl-0 pb-0">
                                <div class="nav flex-column data_sheet-menu nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="font-weight-bold border-bottom text-center p-3 text-uppercase">Caracteristicas</a>
                                    <a class="d-sheet_link border-bottom  pb-5 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-resumen" role="tab" aria-controls="v-pills-home" aria-selected="true">resumen</a>
                                    <a class="d-sheet_link border-bottom pb-5 " id="v-pills-ficha_tecnica-tab" data-toggle="pill" href="#v-pills-ficha_tenica" role="tab" aria-controls="v-pills-ficha_tecnica" aria-selected="false">ficha tecnica</a>
                                    <a class="d-sheet_link border-bottom pb-5 " id="v-pills-equipamiento-tab" data-toggle="pill" href="#v-pills-equipamiento" role="tab" aria-controls="v-pills-equipamiento" aria-selected="false">equipamiento</a>
                                    <a class="d-sheet_link border-bottom pb-5 " id="v-pills-otros-tab" data-toggle="pill" href="#v-pills-otros" role="tab" aria-controls="v-pills-otros" aria-selected="false">otros</a>
                                    <a class="d-sheet_link pb-5 " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">observaciones</a>
                                </div>
                            </div>
                            <div class="col-8 pt-3 p-4 pr-2">
                                <div class="tab-content" id="v-pills-tabContent" data-spy="scroll" data-target="#v-pills-tab">
                                    <div class="tab-pane fade show active" id="v-pills-resumen" role="tabpanel" aria-labelledby="v-pills-resumen-tab">
                                        <p>
                                            lo que determina el consumo de combustible de una moto, esta dado principalmente por el
                                            tamaÃƒÂ±o de su
                                            motor, el peso general de la moto y el tipo
                                            de conducciÃ³n que mantenga el piloto. En leo 110, los dos primeros factores estan a favor de un
                                            excelente rendimiento de combustible, que sumados
                                            a una conducciÃ³n tranquila, permiten entregar una autonomia aproximada de 165 km. con su toque
                                            de 0.92 galones a tope
                                        </p>

                                        <div class="row">
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                            <div class="col"><span><i class="fas fa-checked "></i></span><i class="fas fa-checked "> </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-ficha_tenica" role="tabpanel" aria-labelledby="v-pills-ficha_tecnica">
                                        ficha tecnica
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-equipamiento" role="tabpanel" aria-labelledby="v-pills-equipamiento-tab">
                                        equipamiento
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-otros" role="tabpanel" aria-labelledby="v-pills-otros-tab">
                                        otros
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        observaciones
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- row main container -->
                <div class="row justify-content-center">
                    <div class="col col-md-4 col-sm-12 col-xs-12 mt-4 ">
                        <div class="card data_sheet-bottom_files">
                            <div class="card-body d_sheet-card  text-center">
                                <h5 class="card-title pl-4 text-light  text-uppercase text-left title_data-sheet_bottom">Card title
                                </h5>

                                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                                <p class="card-text text-light  text-center mt-5 mb-2 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                                    pdf, 125 MB, SEP 8 at 2:03 PM</p>
                                <a href="#" class="card-link  text-light text-center mt-4">
                                    <svg class="bi bi-download fa-download fa-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z" />
                                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z" />
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z" />
                                    </svg>
                               
                              <span class="ml-1"> Another link</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12 col-xs-12 mt-4 ">
                        <div class="card data_sheet-bottom_files">
                            <div class="card-body d_sheet-card  text-center">
                                <h5 class="card-title pl-4 text-light  text-uppercase text-left title_data-sheet_bottom">Card title
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                                <p class="card-text text-light  text-center mt-5 mb-2 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                                    pdf, 125 MB, SEP 8 at 2:03 PM</p>
                                <a href="#" class="card-link  text-light text-center mt-4">
                                    <svg class="bi bi-download fa-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z" />
                                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z" />
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z" />
                                    </svg>
                              
                                   <span class="ml-1"> Another link</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12 col-xs-12 mt-4 ">
                        <div class="card data_sheet-bottom_files">
                            <div class="card-body d_sheet-card  text-center">
                                <h5 class="card-title pl-4 text-light  text-uppercase text-left title_data-sheet_bottom">Card title
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                                <p class="card-text text-light  text-center mt-5 mb-2 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                                    pdf, 125 MB, SEP 8 at 2:03 PM</p>
                                <a href="#" class="card-link  text-light text-right mt-4">
                                    <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z" />
                                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z" />
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z" />
                                    </svg>
                              
                                    <span class="ml-1"> Another link</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md  p-0 data_sheet-bottom_files col-md-4  col-sm-12 col-xs-12 ">
              <article>
                <strong class="text-light text-left text-uppercase d-flex justify-content-start pt-3 mb-5 pl-3 pr-2 title_data-sheet_bottom">Ficha sunarp</strong>
                <p class="text-light text-left  d-flex justify-content-center pb-3 pl-2 pr-2  border-bottom text-doc_data-sheet">
                  PDF, 125 MB, Sep
                  8 at 2:03 pm</p>
                <span class="d-flex justify-content-center text-light pb-5 text-download_dsheet-auction"><svg class=" mr-2 bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
                  <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
                </svg>
                  <strong>Download</strong></span>
              </article>
            </div> -->
            </div> <!-- End cold md-9 order 1-->
        </div><!-- End row -->
        <div class="row mb-5 mt-5 ">
            <div class=" bg-light auction-content_tab ">
                <ul class="nav nav-tabs nav-auction_bottom border-bottom pb-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active text-dark  text-uppercase text-tabs_auction-bottom" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">detalles</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark  text-uppercase text-tabs_auction-bottom" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Documentaci&oacute;n</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark text-uppercase text-tabs_auction-bottom" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Condiciones</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                        <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                            <i class="fas fa-clock nav-content_text"></i>
                            <span class="ml-3"> Mayo 29,7:12 pm</span>
                        </h2>
                        <article class="ml-3">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-light active">
                                    <i class="fas fa-caret-left"></i>
                                </label>
                                <label class="btn btn-light">
                                    <i class="fas fa-caret-right"></i>
                                </label>
                            </div>
                        </article>
                    </div>
                </ul>

                <div class="tab-content bg-light auction-content_tab" id="myTabContent">
                    <div class="tab-pane fade active show p-2 " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row p-3">
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12 p-4 ">
                                <article>
                                    <div class="media">

                                        <img src="./assets/img/thumbs/image-173.png" alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0 pl-2">Media heading</h5>
                                            <p class="pl-2"> Donec lacinia congue felis in faucibus. </p>
                                        </div>

                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12 p-4">
                                <article>
                                    <div class="media">
                                        <img src="./assets/img/thumbs/image-173.png" alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0 pl-2">Media heading</h5>
                                            <p class="pl-2"> lacinia congue felis in faucibus. </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 col-xs-12 p-4">
                                <article>
                                    <div class="media">

                                        <img src="./assets/img/thumbs/image-173.png" alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0 pl-2">Media heading</h5>
                                            <p class="pl-2"> lacinia congue felis in faucibus. </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col col-md-3 col-sm-12 col-xs-12 p-4">
                                <article>
                                    <div class="media">
                                        <img src="./assets/img/thumbs/image-173.png" alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0 pl-2">Media heading</h5>
                                            <p class="pl-2"> lacinia congue felis in faucibus. </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation
                            +1
                            labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                            vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar
                            helvetica
                            VHS
                            <p> yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson </p>salvia
                            8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                            stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div class="tab-pane fade  p-4 " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
                            fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                            skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
                            gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                            biodiesel
                            fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer
                            blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End container -->
</div>
<!-- Sidebar right-->
<div class="row mt-5 main-container">
    <!-- Widgets -->
    <!--Footer-->
</div>
<div class="container-fluid mt-5">
    <div class="row ">
        <div class="jumbotron jumbotron-bottom_container">
            <div class="container ">
                <h1 class="font-weight-bold text-light text-center text-uppercase">
                    esta puede ser tu gran <br> oportunidad
                </h1>
                <div class="col-12 col-md-12 col-sm-12 d-flex justify-content-center pt-4">
                    <button class="btn btn-primary rounded-pill pr-4 pl-4 text-capitalize ">simples pasos </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row main-container  mt-5 mb-5 ">
        <!-- nav -->
        <div class="col col-md-12 col-sm-12 mb-3  pl-0 pr-0">
            <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                <a class="navbar-brand text-darken" href="#">Banco fallabella S.A.C</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                    <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                        <i class="fas fa-clock nav-content_text"></i>
                        <span class="ml-3"> Mayo 29,7:12 pm</span>
                    </h2>
                    <article class="ml-3">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light active">
                                <i class="fas fa-caret-left"></i>
                            </label>
                            <label class="btn btn-light">
                                <i class="fas fa-caret-right"></i>
                            </label>
                        </div>
                    </article>
                </div>
            </nav>
        </div>
        <!-- main content -- nr° 2-->
        <div class="col col-md-3 col-sm-6 border-right col-xs-6">
            <div class="card mb-3 pub-item_cont ">
                <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" />
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                </svg>
                <div class="card-body justify-content-center">
                    <p class="card-text text-center text-to_auction">
                        <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                    </p>
                    <p class="card-text text-center title-to_annoucement">
                        <strong>CHEVROLET A91/2018</strong>
                    </p>
                    <div class="align-items-center">
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                                <strong><span class="mr-2">$</span>3500 </strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-3 border-right col-sm-6 col col-xs-6">
            <div class="card mb-4 pub-item_cont">
                <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" />
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                </svg>
                <div class="card-body justify-content-center">
                    <p class="card-text text-center text-to_buy">
                        <strong>comprar ya</strong>
                        <i class="fas fa-shopping-cart ml-2"></i>
                    </p>
                    <p class="card-text text-center title-to_annoucement">
                        <strong>CHEVROLET A91/2018</strong>
                    </p>
                    <div class="align-items-center">
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                                <strong><span class="mr-2">$</span>3500 </strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="card mb-4 pub-item_cont">
                <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" />
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                </svg>
                <div class="card-body justify-content-center">
                    <p class="card-text text-center text-to_buy">
                        <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                    </p>
                    <p class="card-text text-center title-to_annoucement">
                        <strong>CHEVROLET A91/2018</strong>
                    </p>
                    <div class="align-items-center">
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                                <strong><span class="mr-2">$</span>3500 </strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 border-left mb-0">
            <div class="card mb-4 pub-item_cont ">
                <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" />
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                </svg>
                <div class="card-body justify-content-center">
                    <p class="card-text text-center text-to_buy">
                        <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                    </p>
                    <p class="card-text text-center title-to_annoucement">
                        <strong>CHEVROLET A91/2018</strong>
                    </p>
                    <div class="align-items-center">
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                                <strong><span class="mr-2">$</span>3500 </strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection