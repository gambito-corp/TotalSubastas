<!DOCTYPE html>
<html>
<!-- head -->

<head>
  <title>Getting Started</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://unpkg.com/lodash@4.16.6"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <script src="https://use.fontawesome.com/c01ac736c1.js"></script>
</head>
<!-- body -->

<body class="bg-darken-light">
  <!-- Header -->
  <header>
    <div class="navbar nav-top ">
      <div class="container flex-wrap justify-content-md-between justify-content-sm-center">

        <div class="row">
          <div class="col ">
            <a href="#" class="navbar-brand d-flex text-dark align-items-center">
              <img src="./assets/img/Icon-Phone.svg" class="mr-2 " alt="" srcset=""> (+51) 460-2000
            </a></div>
          <div class="col mt-2 ml-2">
            <a href="#" class="text-dark">
              <img src="./assets/img/Imagen 1.png" alt="">
              Chat en vivo
            </a>
          </div>
        </div>
        <div class="row ">
          <div class="col-md  mr-auto  ">
            <a href="./index.html" class="navbar-brand d-flex text-dark align-items-center">
              <img src="./assets/img/Logo-TS.svg">
            </a></div>
        </div>
        <div class="row ">
          <a class="nav-link text-dark signin-text" href="./login.html">
            <img src="./assets/img/Icon-Key.svg" class="mr-2" alt="" srcset="">
            Ingresar</a>
          <a href="./registro.html" class="btn btn-primary rounded-pill "> <span></span><i class="fas fa-user mr-2"></i>
            Registrate </a>
        </div>
      </div>
    </div>
    <!-- Navbar header bottom -->
    <div class="navbar navbar-dark navbar-top navbar-expand-lg bg-nav">
      <div class="container">
        <a class="navbar-brand  d-flex align-items-center pl-5 mr-5" href="#"><img src="./assets/img/peru.png"
            alt="" /></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <a href="./subastas.html" class="navbar-brand d-flex align-items-center">
            Subastas
          </a>
          <a href="./FAQS.html" class="navbar-brand d-flex align-items-center">
            Preguntas
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            Condiciones
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            Quienes somos
          </a>
          <!-- Link nav - Link nr° 5- top -->
          <a href="#" class="navbar-brand d-flex align-items-center">
            Vender
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg class="bd-placeholder-img rounded-circle" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Completely round image: 75x75">
              <title>Completely round image</title>
              <rect width="100%" height="100%" fill="#868e96"></rect>
              <text x="25%" y="25%" fill="#dee2e6" dy=".3em"></text>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row mt-5">
      <!-- slider -->
      <div class="col-md-6  pl-md-0  mb-sm-4 mb-xs-4 col-sm-12 order-md-1 ">
        <div id="FirstSlide" class="carousel slide   first-slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#FirstSlide" data-slide-to="0" class=" indicator ">
            </li>
            <li data-target="#FirstSlide" data-slide-to="1"></li>
            <li data-target="#FirstSlide" data-slide-to="2"></li>
          </ol>
          <div class="l_inner"></div>
          <div class="l_inner-ab"></div>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel dolorem iste, a non eligendi
                        provident, laborum, voluptates illo dicta ullam perspiciatis! Aliquam sunt porro commodi unde accusantium,
                        laudantium corrupti?</p>-->
          <div class="carousel-inner slide-border">
            <div class="carousel-item active first" data-interval="100000">
              <span class="text-light pt-1 live-today">
                Hoy
              </span>
              <article class="first-slide">
                <figure class=" heading-carousel_top text-light  ">
                  <!-- slider item carousel logo fallabella -->
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
              <!-- slider item carousel nr° 1 -->
              <img class="carousel-item-a_imagen rounded" src="./assets/img/image-205.png" height="555px" alt="...">
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="555px"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                aria-label="Placeholder: First slide">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="100%" y="100%" fill="#555" dy=".3em">Second
                  slide</text>
              </svg>

            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="555px"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                aria-label="Placeholder: First slide">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="100%" y="100%" fill="#555" dy=".3em">Third
                  slide</text>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6  sec_in-out order-md-2">
        <div class="row bg-y-light  slide-border ">
          <div class="oval third_in-out  mr-5 mt-4"></div>
          <div class=" col ml-3   ">
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
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel dolorem iste, a non
                                    eligendi
                                    provident, laborum, voluptates illo dicta ullam perspiciatis! Aliquam sunt porro commodi unde accusantium,
                                    laudantium corrupti?</p>-->
        <div class="row">
          <div class="col-md-6 p-0  d-md-flex  mt-4 order-md-3">
            <div
              class="col col-md-11 mb-sm-1 card-slide card-slide_success col-sm-12 p-0  mr-md-4 order-md-1 bg-success_light order-md-1     ">
              <img class="pt-3" src="./assets/img/File.svg" alt="">
              <article>
                <strong class="text-light d-flex justify-content-center pt-3 pr-2">Documentación a la mano <br> de
                  cada
                  subasta</strong>
                <p
                  class="text-light d-flex justify-content-center pt-2 pr-2 border-bottom pl-2 pr-2 pb-2 text-doc_saga-fallabella">
                  PDF, 125 MB, Sep 8 at 2:03 pm
                </p>
                <span class="d-flex justify-content-center text-light pb-3">
                  <svg class="bi bi-download  mt-1 mr-2 fa-download" width="16px" height="16px" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z">
                    </path>
                    <path fill-rule="evenodd"
                      d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z">
                    </path>
                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"></path>
                  </svg>
                  <span class="f-500">Download</span></span>
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
    <div class="row">
      <div class="col-12 col-md-12 mt-4">
        <nav aria-label="breadcrumb">
          <ul class="nav justify-content-start">
            <li class="breadcrumb-item mr-2" aria-current="page">
              <strong> Home </strong>
            </li>
            <li class="breadcrumb-item   mr-2">
              <strong> All categories </strong>
            </li>
            <li class="breadcrumb-item   mr-2">
              <strong> autos </strong>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="row  mt-2">
      <!-- Navbar
      <div class="col-md col-md-12 mt-5 mb-2  pl-3 pr-1">
        <div class="row mb-2">

        </div>
      </div>-->
      <!-- End Navbar -->
      <!-- side nav -->
      <div class="row rounded pb-4">
        <div class="col col-md-3   order-md-1 mb-4 ">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted"></span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <!--Accordion wrapper-->
          <div class="accordion md-accordion" id="categorias" role="tablist" aria-multiselectable="true">
            <!-- Accordion card -->
            <div class="card side-nav">
              <!-- Card header -->
              <a data-toggle="collapse" data-parent="#categorias" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1" class="">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0"
                  role="tab" id="headingOne1">

                  <p class="mb-0 card-side-nav_title text-dark ">
                    Categorias
                  </p>
                  <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                </div>
              </a>
              <!-- Card body -->
              <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#accordionEx">
                <div class="card-body ">
                  <div class="col d-flex justify-content-between border-bottom mt-2">
                    <p class="car-side-nav_bp"> Autos livianos </p> <span class="car-side-nav_bp-span"> 25 </span>
                  </div>
                  <div class="col d-flex justify-content-between border-bottom mt-2">
                    <p class="car-side-nav_bp"> Autos pesados </p> <span class="car-side-nav_bp-span"> 13 </span>
                  </div>
                  <div class="col d-flex justify-content-between  mt-2">
                    <p class="car-side-nav_bp"> Autos pesados </p><span class="car-side-nav_bp-span"> 2 </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Accordion card -->
            <div class="card side-nav">
              <!-- Card header -->
              <a data-toggle="collapse" data-parent="#tiposubasta" href="#collapseOne2" aria-expanded="true"
                aria-controls="collapseOne2" class="">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0"
                  role="tab" id="tiposubasta">

                  <p class="mb-0 car-side-nav_title text-dark ">
                    Tipo subasta
                  </p>
                  <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                </div>
              </a>
              <!-- Card body -->
              <div id="collapseOne2" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#tiposubasta">
                <div class="card-body ">
                  <div class="col d-flex justify-content-between ">

                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label car-side-nav_bp" for="exampleCheck1">con reserva</label>
                    </div>

                  </div>
                  <div class="col d-flex justify-content-between ">

                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label car-side-nav_bp" for="exampleCheck1">sin reserva</label>
                    </div>

                  </div>
                  <div class="col d-flex justify-content-between mt-2">

                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label car-side-nav_bp" for="exampleCheck1">compra inmediata</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- Accordion card -->
            <div class="card side-nav">
              <!-- Card header -->
              <a data-toggle="collapse" data-parent="#precio" href="#collapseOne3" aria-expanded="true"
                aria-controls="collapseOne3" class="">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0"
                  role="tab" id="precio">

                  <p class="mb-0 car-side-nav_title text-dark ">
                    Precio
                  </p>
                  <i class="fas fa-angle-down rotate-icon"></i>

                </div>
              </a>
              <!-- Card body -->
              <div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#precio">
                <div class="card-body ">
                  <div class="col-12 d-flex justify-content-between  mt-2">
                    <form class="m-2">
                      <div class="form-row">
                        <div class="col">
                          <input type="text" class="form-control car-side-nav_bp" placeholder="$ 3000">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control car-side-nav_bp" placeholder="$ 5000">
                        </div>
                      </div>
                      <div class="form-row">

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Accordion card -->
            <div class="card side-nav">
              <!-- Card header -->
              <a data-toggle="collapse" data-parent="#empresa" href="#collapseOne4" aria-expanded="true"
                aria-controls="collapseOne4" class="">
                <div
                  class="card-header  car-side-nav_header text-dark d-flex justify-content-between collapsed border-0"
                  role="tab" id="empresa">

                  <p class="mb-0 car-side-nav_title text-dark ">
                    Empresa
                  </p>
                  <i class="fas fa-angle-down rotate-icon"></i>
                </div>
              </a>
              <!-- Card body -->
              <div id="collapseOne4" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#precio">
                <div class="card-body ">
                  <div class="col d-flex justify-content-between mt-2">
                    <div class="input-group m-2">
                      <div class="input-group ">
                        <input class="form-control py-2 border-right-0 border" type="search" value="search"
                          id="example-search-input">
                        <span class="input-group-append">
                          <button class="btn btn-outline-secondary border-left-0 border" type="button">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card side-nav">
              <!-- Card header -->
              <a data-toggle="collapse" data-parent="#ciudad" href="#collapseOne5" aria-expanded="true"
                aria-controls="collapseOne5" class="">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0"
                  role="tab" id="ciudad">
                  <p class="mb-0 car-side-nav_title text-dark ">
                    Ciudad
                  </p>
                  <i class="fas fa-angle-down rotate-icon"></i>
                </div>
              </a>
              <!-- Card body -->
              <div id="collapseOne5" class="collapse show car-side-nav_bp" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#ciudad">
                <div class="card-body ">
                  <div class="col d-flex justify-content-between mt-2">
                    <select class="custom-select">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion wrapper -->

          <div class="mr-2  side-nav mt-4 rounded ">
            <!-- <article class="p-side_nav text-light">
              <p class="text-capitalize">mas de
              <h2>500</h2> usuarios <br> conf&iacute;an en nosotros</p>
            </article> -->
            <img class="img-fluid d-md-block radius" src="./assets/img/image-021.png" alt="">
          </div>
        </div>

        <div class="col-md-9 order-md-2 mt-3">
          <div class="row">
            <nav class="navbar navbar-expand-lg nav-top-content mb-4">
              <a class="navbar-brand title-to_breadcrums pl-4" href="#">Autos</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link title-to_results" href="#">52 Resultados <span
                        class="sr-only">(current)</span></a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <div class="dropdown mr-4">
                    <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Filtros <span class="badge badge-sea">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                      <button class="dropdown-item" type="button">
                        Action
                      </button>
                      <button class="dropdown-item" type="button">
                        Another action
                      </button>
                      <button class="dropdown-item" type="button">
                        Something else here
                      </button>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu2"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ordenar por
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">
                        Action
                      </button>
                      <button class="dropdown-item" type="button">
                        Another action
                      </button>
                      <button class="dropdown-item" type="button">
                        Something else here
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </nav>
          </div>
          <div class="row main-container">
            <!-- nav -->
            <div class="col-md col-md-12 mb-3 pl-0 pr-0">
              <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                <a class="navbar-brand text-darken" href="#">Banco fallabella S.A.C</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- main content -- nr° 1-->
            <div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">90</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-165.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_auction">
                    <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction ">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong><i class="fa fa-long-arrow-right  ml-2"
                          aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 border-right col-sm-6 col col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span class="mt-4"> <i class="text-light fa fa-heart-o heart  " aria-hidden="true"></i>
                    <p class="mb-2 text-light">120</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-166.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong>
                    <i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4  col-sm-6 col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">230</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-167.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4  border-right  col-sm-6 col-xs-12 blogBox  moreBox" style="display:none;">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">556</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-168.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4  border-right  col-sm-6 col-xs-12 blogBox  moreBox" style="display:none;">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">230</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-169.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4   col-sm-6 col-xs-12 blogBox  moreBox" style="display:none;">
              <div class="card mb-4 pub-item_cont">
                <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172"
                  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                  aria-label="Placeholder: Thumbnail">
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
                  <div class="align-items-center btn_auction">
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
          <!-- end first container -->
          <div class="row main-container mt-5">
            <!-- nav -->
            <div class="col-md col-md-12 mb-3  pl-0 pr-0">
              <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                <a class="navbar-brand text-darken" href="#">Pacifico Seguros S.A.C</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                  <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                    <i class="fas fa-clock nav-content_text"></i>
                    <span class="ml-3"> Junio 17, 7:12 pm</span>
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
            <div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">90</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-165.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_auction">
                    <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction ">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong><i class="fa fa-long-arrow-right  ml-2"
                          aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 border-right col-sm-6 col col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">120</p>
                  </span>

                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-166.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong>
                    <i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
                    <div class="btn-group d-flex justify-content-center">
                      <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                        <strong><span class="mr-2">$</span>3500 </strong>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4  col-sm-6 col-xs-12 blogBox  moreBox">
              <div class="card mb-4 pub-item_cont">
                <article class="pub-item_head">
                  <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                    <p class="mb-2 text-light">230</p>
                  </span>
                  <i class="fa fa-bookmark  bookmark  text-light" aria-hidden="true"></i>
                  <img src="./assets/img/auctions/image-167.png" alt="">
                </article>
                <div class="card-body justify-content-center">
                  <p class="card-text text-center text-to_buy">
                    <strong>comprar ya</strong><i class="fas fa-shopping-cart ml-2"></i>
                  </p>
                  <p class="card-text text-center title-to_annoucement">
                    <strong>CHEVROLET A91/2018</strong>
                  </p>
                  <div class="align-items-center btn_auction">
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
          <div class="col-12 mt-5">
            <nav aria-label="breadcrumb">
              <a id="loadMore"
                class="btn rounded-pill expanded btn-block pt-3 pb-3 border font-weight-bold text-light_dark">
                <span class="spinner-border spinner-border-sm mr-4" aria-hidden="true"></span>Load more
              </a>
            </nav>
          </div>
        </div>
      </div>

      <!-- <div class="container d-flex justify-content-center">
        <div class="row main-container  mt-5 mb-5 ">
          <!-- nav Features
      <div class="col col-md-12 col-sm-12 mb-3  pl-0 pr-0">
        <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
          <a class="navbar-brand text-darken" href="#">Banco fallabella S.A.C</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
      <!-- main content -- nr° 2
      <div class="col col-md-3 col-sm-6 border-right col-xs-6">
        <div class="card mb-3 pub-item_cont ">
          <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
            aria-label="Placeholder: Thumbnail">
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
            <div class="align-items-center btn_auction">
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
          <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
            aria-label="Placeholder: Thumbnail">
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
            <div class="align-items-center btn_auction">
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
          <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
            aria-label="Placeholder: Thumbnail">
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
            <div class="align-items-center btn_auction">
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
          <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="172"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
            aria-label="Placeholder: Thumbnail">
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
            <div class="align-items-center btn_auction">
              <div class="btn-group d-flex justify-content-center">
                <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                  <strong><span class="mr-2">$</span>3500 </strong>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>-->

    </div>

  </div>

  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm col-8 pt-5 col-md-8 align-self-center col-sm-12 col-xs-12 mb-2 mt-5 ml-sm-auto">
          <article>
            <div class="input-group col-md-8 offset-md-6">
              <input type="text" class="form-control" placeholder="Ingresa tu correo para alerta de oportunidades!"
                aria-label="Ingresa tu correo para alerta de oportunidades!" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <span class="input-group-text rss-send_email" id="basic-addon2">
                  <i class="fas fa-paper-plane"></i>
                </span>
              </div>
            </div>
          </article>
        </div>
        <!-- Social Networks -->
        <div class="col-sm col-md-4 ml-md-auto col-4 pt-5 col-sm-12 col-xs-12 mb-2 mt-5">
          <article>
            <article class="social-network_bottom">
              <ul class="nav justify-content-end m-3">
                <li class="nav-item">
                  <a href=""><i class="fab fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                  <a href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                  <a href=""><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </article>
          </article>
        </div>
      </div>
      <!-- Bottom footer -->
      <div class="navbar nav-footer shadow-sm pt-5 pb-5">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <span>Subastas</span>
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <span>Preguntas</span>
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <span>Condiciones</span>
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <span>Quienes somos</span>
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <span>Vender</span>
          </a>
        </div>
      </div>
      <!--Footer navbar-->
      <nav class="navbar navbar-expand-lg d-flex justify-content-around pt-5 pb-5">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <span class="copyright">&copy;</span>
              <span class="ml-2 copyright">2020 Totalsubastas </span>
              <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">whatsapp</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Asesoria legal</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cont&aacute;ctenos</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-5 social-network_footer">
          total
        </form>
      </nav>
    </div>
  </footer>
  <!--Footer-->

  <!-- end footer -->
  </div>
  <!-- end row -->
  </div>
  <!-- end container -->
  <script src="./src/index.js"></script>
  <script src="./assets/js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script src="./assets/js/app.js"></script>

</body>

</html>
