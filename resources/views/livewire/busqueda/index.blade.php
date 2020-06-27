<div>
    <div class="row">
        <div class="col-12 col-md-12 mt-4">
            <nav aria-label="breadcrumb">
                <ul class="nav justify-content-start">
                    <li class="breadcrumb-item mr-2" aria-current="page">
                        <strong> Home </strong>
                    </li>
                    <li class="breadcrumb-item title-to_breadcrums active mr-2">
                        <a> All categories </a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- BARRA DE BUSQUEDA --}}
        <div class="col col-md-3  pl-0  order-md-1 mb-4 ">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted"></span>
                <span class="badge badge-secondary badge-pill"></span>
            </h4>
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="categorias" role="tablist" aria-multiselectable="true">
                <!-- Accordion card Categorias-->
                <div class="card side-nav">
                    <!-- Card header -->
                    <a data-toggle="collapse" data-parent="#categorias" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" class="">
                        <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="headingOne1">
                            <p class="mb-0 card-side-nav_title text-dark ">
                                Categorias
                            </p>
                            <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                        </div>
                    </a>
                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
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
                <!-- Accordion card Tipo Subasta-->
                <div class="card side-nav">
                    <!-- Card header -->
                    <a data-toggle="collapse" data-parent="#tiposubasta" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2" class="">
                        <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="tiposubasta">
                            <p class="mb-0 car-side-nav_title text-dark ">
                                Tipo subasta
                            </p>
                            <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                        </div>
                    </a>
                    <!-- Card body -->
                    <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#tiposubasta">
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
                <!-- Accordion card Precio-->
                <div class="card side-nav">
                    <!-- Card header -->
                    <a data-toggle="collapse" data-parent="#precio" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3" class="">
                        <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="precio">
                            <p class="mb-0 car-side-nav_title text-dark ">
                                Precio
                            </p>
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </div>
                    </a>
                    <!-- Card body -->
                    <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#precio">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion card Empresa-->
                <div class="card side-nav">
                    <!-- Card header -->
                    <a data-toggle="collapse" data-parent="#empresa" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4" class="">
                        <div class="card-header  car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="empresa">
                            <p class="mb-0 car-side-nav_title text-dark ">
                                Empresa
                            </p>
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </div>
                    </a>
                    <!-- Card body -->
                    <div id="collapseOne4" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#precio">
                        <div class="card-body ">
                            <div class="col d-flex justify-content-between mt-2">
                                <div class="input-group m-2">
                                    <div class="input-group ">
                                        <input wire:model="buscar"
                                               wire:keydown.enter="asignarPrimero()" type="text" class="form-control" id="buscar">
                                        <span class="input-group-append">
                                            <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                        @error("buscar")
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @else
                                        @if(count($empresas)>0)
                                        @if(!$picked)
                                        <div class="shadow rounded px-3 pt-3 pb-0 container">
                                            @foreach($empresas as $empresa)
                                            <div style="cursor: pointer;">
                                                <a wire:click="asignarEmpresa('{{ $empresa->nombre }}')">
                                                    {{ $empresa->nombre }}
                                                </a>
                                            </div>
                                            <hr>
                                            @endforeach
                                        </div>
                                        @endif
                                        @else
                                        <small class="form-text text-muted">Comienza a teclear para que aparezcan los resultados</small>
                                        @endif
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion card Ciudad-->
                <div class="card side-nav">
                    <!-- Card header -->
                    <a data-toggle="collapse" data-parent="#ciudad" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5" class="">
                        <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="ciudad">
                            <p class="mb-0 car-side-nav_title text-dark ">
                                Ciudad
                            </p>
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </div>
                    </a>
                    <!-- Card body -->
                    <div id="collapseOne5" class="collapse car-side-nav_bp" role="tabpanel" aria-labelledby="headingOne1" data-parent="#ciudad">
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

            {{-- ANUNCIO--}}
            <div class="mr-2  side-nav mt-4  ">
                <article class="p-side_nav text-light">
                    <p class="text-capitalize">mas de
                    <h2>500</h2> usuarios <br> conf&iacute;an en nosotros</p>
                </article>
                <img class="img-fluid d-md-block" src="./assets/img/image-021.png" alt="">
            </div>
            {{-- FIN DEL ANUNCIO--}}
        </div>
        {{-- FIN DE BARRA DE BUSQUEDA--}}
        {{-- INICIO DEL CUADRO DE RESULTADOS--}}
        <div class="col-md-9 order-md-2 mt-3">
            <div class="row">
                {{-- NAV DE RESULTADOS--}}
                <nav class="navbar navbar-expand-lg nav-top-content mb-4">
                    <a class="navbar-brand title-to_breadcrums pl-4" href="#">Autos</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link title-to_results" href="#">52 Resultados <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <div class="dropdown mr-4">
                                <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                {{-- FIN DEL NAV DE RESULTADOS--}}
                <div class="container">
                    <div class="main-container row">

                        @if($picked)
                            <div class="col-md col-md-12 mb-3 pl-0 pr-0">
                                <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                                    <a class="navbar-brand text-darken" href="#"></a>

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
                                                    <a href="#carouselExample" role="button" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                                                </label>
                                                <label class="btn btn-light">
                                                    <a href="#carouselExample" role="button" data-slide="next"><i class="fas fa-caret-right"></i></a>
                                                </label>
                                            </div>
                                        </article>
                                    </div>
                                </nav>
                            </div>


                            {{-- <div class="row {{$producto == 0 ? 'active' : '' }}"> --}}
                            <div class="container-fluid">
                                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        @for ($i = 0; $i < 10; $i++)

                                        <div class="carousel-item col-md-4 col-sm-6 border-right col-xs-12 blogBox moreBox {{$i == 0 ? 'active' : '' }}">
                                            <div class="card mb-4 pub-item_cont">
                                                <img class="card-img-top rounded" width="100%" height="172" src="{{ asset('img/vehiculos/coche.png') }}" alt="Imagen del Vehiculo">
                                                <div class="card-body justify-content-center">
                                                    <p class="card-text text-center text-to_auction">
                                                        <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                                                    </p>

                                                    <p class="card-text text-center title-to_annoucement">
                                                        <strong>nombre del producto</strong>
                                                    </p>

                                                    <div class="align-items-center">
                                                        <div class="btn-group d-flex justify-content-center">
                                                            <a href="{{route('chat.show')}}" type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                                                                <strong><span class="mr-2">$</span>precio</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
{{--                                            hola--}}
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 text-center">
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#exampleModalScrollable"
                                    data-whatever="@mdo"
                                >
                                    Open modal for @mdo
                                </button>

                                <div
                                    class="modal fade"
                                    id="exampleModalScrollable"
                                    tabindex="-1"
                                    role="dialog"
                                    aria-labelledby="exampleModalScrollableTitle"
                                    aria-modal="true"
                                >
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 border-0 pr-5">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                                                <button type="button" class="close close-modal " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <article class="text-center p-5">
                                                    <h4 class="text-uppercase font-weight-bold text-italic">Debes iniciar sesión para poder participar</h4>
                                                    <p class=" text-popup  ">Si ya tienes cuenta puedes ingresar aquí, en su defecto create una cuenta y empieza a encontrar oportunidades</p>
                                                    <button type="button" class="btn btn-primary rounded-pill">Registrar</button>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                    <!-- -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
