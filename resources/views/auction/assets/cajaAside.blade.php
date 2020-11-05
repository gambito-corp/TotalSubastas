<div class="col-md-3 order-md-2 mb-4">
    @auth
    <div class="row">
        <div class="col-md-12 container-caja-aside">
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
                            <div class="">
                                <p class="car-side-nav_bp">
                                    Puedes venir al almacén central, solicita una visita aquí:
                                </p>
                            </div>
                        <form class=" d-block" method="POST" action="{{route('citas', ['id' => App\Helpers\Gambito::hash($producto->id)])}}">
                            @csrf
                                <div class="form-group">
                                    <label class="tex-dark font-weight-bold">fecha</label>
                                    <input type="date" name="fecha" class="form-control">
                                </div>
                                <div class="form-groupmb-3">
                                    <label class="tex-dark font-weight-bold">hora </label>
                                    <input type="time" name="hora" class="form-control">
                                </div>
                                <div class="form-group  d-flex justify-content-center" style="margin-bottom: 10px">
                                    <button type="submit" class="btn  btn-primary rounded-pill btn-subasta-ts" value="solicitar" style="margin-top: 25px;">
                                        Solicitar
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
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
                        <div class="row mr-0 ml-0 text-center">
                            <div class="col-md-4 text-to_title-auction_live ">
                                Puesto
                            </div>
                            <div class="col-md-4 text-to_title-auction_live">
                                Usuario
                            </div>
                            <div class="col-md-4 text-to_title-auction_live">
                                Pujas
                            </div>
                            <div class="row margin-row pt-2 d-flex pb-2 border-bottom border-top mr-0 ml-0">
                                @forelse($resultados as $key => $resultado)
                                    <div class="col-md-4 text-darken text-auction_live ranking-side_nav">
                                        {{$key+1}}
                                    </div>
                                    <div class="col-md-4 text-darken text-auction_live usuario-puja-subasta">
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
    </div>
    @endauth
</div>
