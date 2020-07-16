<div class="col-md-9 mt-3" wire:pool.750ms>
    <div class="row">
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
            </div>
        </nav>
    </div>
    @forelse($this->empresas as $dat)
        <div class="row main-container mb-5">
            <div class="col-md col-md-12 mb-3 pl-0 pr-0">
                <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                    <a class="navbar-brand text-darken" href="#">{{$dat->razon_social}}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            @forelse($dat->Lotes()->with('Productos')->get() as $dat)
                <div class="col-md col-md-12 mb-3 pl-0 pr-0">
                    <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
                        <a class="navbar-brand text-darken" href="#">{{$dat->nombre}}</a>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                            <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
                                <i class="fas fa-clock nav-content_text"></i>
                                <span class="ml-3">{{$dat->subasta_at->diffForHumans()}}</span>
                            </h2>
                            <article class="ml-3">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <a class="carousel-control-prev btn btn-light active" href="#carousel-slide">
                                        <i class="fas fa-caret-left">
                                        </i>
                                    </a>
                                    <a class="carousel-control-next btn btn-light" href="#carousel-slide">
                                        <i class="fas fa-caret-right">
                                        </i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </nav>
                    <diV class="row">
                    @forelse($dat->Productos()->with('Imagenes')->get() as $dat)
                            <div class="col-md-4 col-sm-6 border-right col-xs-12">
                                <div class="card mb-4 pub-item_cont">
                                    <article class="pub-item_head">
                                        <span> <i class="text-light fa fa-heart-o heart p-2" aria-hidden="true"></i>
                                            <p class="mb-2 text-light">90</p>
                                        </span>
                                        <i class="fa fa-bookmark  bookmark  text-light text-light" aria-hidden="true"></i>
                                        @isset($dat->Imagenes->first()->imagen)
                                            <img src="{{asset($dat->Imagenes->first()->imagen)}}" alt="">
                                        @endisset
                                    </article>
                                    <div class="card-body justify-content-center">
                                        <p class="card-text text-center text-to_auction">
                                            <strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
                                        <p class="card-text text-center title-to_annoucement">
                                            <strong>{{$dat->producto}}</strong>
                                        </p>
                                        <div class="align-items-center btn_auction ">
                                            <div class="btn-group d-flex justify-content-center">
                                                <a href="{!!route('subastaOnline', ['id' => \App\Helpers\Gambito::hash($dat->id)])!!}">
                                                    <button type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
                                                        <strong><span class="mr-2">$</span>{{$dat->precio}} </strong>
                                                        <i class="fa fa-long-arrow-right  ml-2" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse

                    </diV>
                </div>
                @empty

                @endforelse
        </div>
    @empty

    @endforelse
</div>
