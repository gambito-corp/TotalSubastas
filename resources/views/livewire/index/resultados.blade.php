<div class="col-md-9 mt-3">
    @foreach($empresas as $empresa)
    <div class="row">
        @foreach($empresa->Lote as $lote)
        <nav class="navbar navbar-expand-lg nav-top-content mb-4">
            <a class="navbar-brand title-to_breadcrums pl-4" href="#">Autos</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link title-to_results" href="#">hay {{count($empresas)}} Resultados
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ordenar por
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">
                                accion 1
                            </button>
                            <button class="dropdown-item" type="button">
                                accion 2
                            </button>
                            <button class="dropdown-item" type="button">
                                accion 3
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
         @endforeach
    </div>
    <div class="row main-container">
        <div class="col-md col-md-12 mb-3 pl-0 pr-0">
            <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                <a class="navbar-brand text-darken" href="#">{{$lote->Empresa->razon_social}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                    <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                        <i class="fas fa-clock nav-content_text"></i>
                        <span class="ml-3">{{$lote->subasta_at->diffForHumans()}}</span>
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
        @foreach($lote->Producto as $key => $producto)
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
                            <a href="{{ route('subastaOnline', ['id' => \App\Helpers\Gambito::hash($producto->id)])}}">
                                <button type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                                    <strong><span class="mr-2">$</span>3500 </strong><i class="fa fa-long-arrow-right  ml-2"
                                        aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{--    @endforeach--}}
    @endforeach
</div>
