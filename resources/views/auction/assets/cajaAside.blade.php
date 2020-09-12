<div class="col-md-3 order-md-2 mb-4 pr-0">
    @auth
    <div class="accordion md-accordion" id="ofertas" role="tablist" aria-multiselectable="true">
        <div class="card side-nav">
            <a data-toggle="collapse"
               data-parent="#ofertas"
               href="#collapse1"
               aria-expanded="true"
               aria-controls="collapse1"
               class="border-bottom">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between border-bottom collapsed border-0" role="tab" id="headingOne1">
                    <p class="mb-0 car-side-nav_title text-dark  ">
                        solicita una vista
                    </p>
                    <img src="{{asset('img/20x20.svg')}}" alt="" srcset="">
                </div>
            </a>
            <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                <div class="card-body ">
                    <div class="col d-flex justify-content-between  mt-2">
                        <p class="car-side-nav_bp">
                            Puedes venir al almacén central, solicita una visita aquí:
                        </p>
                    </div>
                <form class=" d-block  mb-3" method="POST" action="{{route('citas', ['id' => $producto->id])}}">
                    @csrf
                        <div class="form-group  mb-3">
                            <label class="tex-dark font-weight-bold">fecha</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="form-groupmb-3">
                            <label class="tex-dark font-weight-bold">hora </label>
                            <input type="time" name="hora" class="form-control">
                        </div>
                        <div class="form-group  mb-3 d-flex justify-content-center ">
                            <button type="submit" class="btn  pl-4 pr-4 mt-3 btn-primary rounded-pill" value="solicitar">
                                solicitar
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
    <div class="accordion md-accordion mt-4" id="ofertas" role="tablist" aria-multiselectable="true">
        <div class="card side-nav">
            <a data-toggle="collapse" data-parent="#ofertas" href="#collapse2" aria-expanded="true" aria-controls="collapse2" class="border-bottom ">
                <div class="card-header car-side-nav_header text-dark d-flex justify-content-between border-bottom  collapsed border-0" role="tab" id="headingOne1">
                    <p class="mb-0 car-side-nav_title text-dark ">
                        ofertas
                    </p>
                    <i class="fas fa-gavel fa-rotate-270 "></i>
                </div>
            </a>
            <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                <div class="row mr-0 ml-0">
                    <div class="col-md-4 text-to_title-auction_live ">
                        Puesto
                    </div>
                    <div class="col-md-4 text-to_title-auction_live">
                        Usuario
                    </div>
                    <div class="col-md-4 text-to_title-auction_live">
                        Monto
                    </div>
                    <div class="row margin-row pt-2 d-flex pb-2 border-bottom border-top ml-1 mr-1">
                        @forelse($resultados as $key => $resultado)
                            <div class="col-md-4 text-darken text-auction_live ranking-side_nav">
                                {{$key+1}}
                            </div>
                            <div class="col-md-4 text-darken text-auction_live">
                                {{$resultado['usuario']['name']}}
                            </div>
                            <div class="col-md-4 text-darken text-auction_live text-to_best-auction ranking_to-auction_text">
                                {{$resultado['cantidad']}}
                            </div>
                        @empty
                            <div class="col-md-4 text-darken text-auction_live ranking-side_nav">
                                -
                            </div>
                            <div class="col-md-4 text-darken text-auction_live">
                                -
                            </div>
                            <div class="col-md-4 text-darken text-auction_live text-to_best-auction ranking_to-auction_text">
                                -
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
