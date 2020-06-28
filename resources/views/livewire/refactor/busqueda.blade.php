<div>
    <div class="row">
        {{-- //TODO: Lista aside de filtro--}}
        <div class="col col-md-3  pl-0  order-md-1 mb-4 ">
            <div>
                {{--//TODO: Inicio de acordeon--}}
                <div class="accordion md-accordion" id="categorias" role="tablist" aria-multiselectable="true">
                    {{-- //TODO: Categorias --}}
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

                    {{-- //TODO: Tipo De Subasta --}}
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

                    {{-- //TODO: Precio --}}
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

                    {{-- //TODO: Empresas --}}
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
                                <span class="badge {{$picked == true ? 'badge-success' : 'badge-danger'}}">{{$picked == true ? 'Busca Una Empresa' : 'buscando'}}</span>
                                <div class="col d-flex justify-content-between mt-2">
                                    <div class="input-group m-2">
                                        <div class="input-group ">
                                            <input class="form-control py-2 border-right-0 border" type="text" id="buscar" wire:model="buscar" wire:keydown.enter="asignarPrimero()">
                                            <span class="input-group-append">
                                                <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>

                                        @error("buscar")

                                        <small class="form-text text-danger">{{$message}}</small>

                                        @else
                                        @if(count($empresas)>0)

                                        @if(!$picked)
                                        <div class="shadow rounded px-3 pt-3 pb-0 container">
                                            @foreach($empresas as $empresa)
                                            <div style="cursor: pointer;" class="row sombreado-azul">
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

                    {{-- //TODO: Ciudad --}}
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
                {{-- //TODO: Fin del Acordeon --}}
                @include('assets.anuncio')
            </div>
        </div>
        <div class="col-md-9 order-md-2 mt-3">
            <div class="row">
                {{-- //TODO: Resultados de la busqueda--}}
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
                {{-- //TODO: Caja de Resultados--}}

                @php
                    use Hashids\Hashids;
                    $productos = App\Producto::all();
                    $users = App\User::all();
                    $hashids = new Hashids();
                @endphp
                @if(count($empresas)>0)

                @if(!$picked)

                @foreach($empresas as $empresa)

                <div class="container">
                    <div class="row main-container">
                        <!-- nav -->
                        @foreach($empresa->Lote as $lote)
                            <div class="col-md col-md-12 mb-3 pl-0 pr-0">
                                <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                                    <a class="navbar-brand text-darken" href="#">{{$lote->Empresas->razon_social}}</a>

                                    <a class="navbar-brand text-darken" href="#">{{$lote->nombre}}</a>

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                                        <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                                            <i class="fas fa-clock nav-content_text"></i>
                                            <span class="ml-3"> {{$lote->subasta_at->diffForHumans()}}</span>
                                        </h2>
                                        <article class="ml-3">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-light active">
                                                    <i href="#multi-item-example" data-slide="next" class="fas fa-caret-left"></i>
                                                </label>
                                                <label class="btn btn-light">
                                                    <i href="#multi-item-example" data-slide="next" class="fas fa-caret-right"></i>
                                                </label>
                                            </div>
                                        </article>
                                    </div>
                                </nav>
                            </div>
                            @foreach($lote->Producto as $producto)
                            <!-- main content -- nr° 1-->
                                        <div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox moreBox">
                                            <div class="card mb-4 pub-item_cont">
                                                <img class="card-img-top rounded" width="100%" height="172" src="{{ asset('img/vehiculos/coche.png') }}" alt="Imagen del Vehiculo">
                                                <div class="card-body justify-content-center">
                                                    <p class="card-text text-center text-to_auction">
                                                        <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                                                    </p>
                                                    <p class="card-text text-center title-to_annoucement">
                                                        <strong></strong>
                                                    </p>
                                                    <div class="align-items-center">
                                                        <div class="btn-group d-flex justify-content-center">
                                                            <a href=" auction/id/{{ $hashids->encode($producto->id, 0,1,2,3,4,5,6) }}" type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                                                                <strong><span class="mr-2">$</span>{{ $producto->precio }}</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                            @endforeach
                        @endforeach




                    </div>
                </div>
                <br>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>
    @include('assets.widgets')
</div>
