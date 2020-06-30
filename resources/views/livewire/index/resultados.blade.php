<div class="container">
        @php
            use App\Helpers\Gambito;
            $Gambito = new Gambito();
        @endphp
    @foreach($empresas as $empresa)
    <div class="row main-container">

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
            @foreach($lote->Producto as $key => $producto)
            <!-- main content -- nr° 1-->
                <div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox moreBox {{$key == 0? 'active':''}} ">
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
                                    <a href="{{route('subastaOnline', ['id' => $Gambito->hash($producto->id)])}}" type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
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
        @endforeach
</div>
