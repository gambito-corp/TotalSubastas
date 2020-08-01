<div class=" col col-md-3 order-md-1 live-push_action-ranking">
    <article class="border-bottom">
        <h5 class="text-uppercase r-timer_live">Subasta en vivo</h5>
    </article>
    <div class="row p-4">
        <div class="col-12 pb-5 text-center">
            <img class="gif-size" src="{{asset('assets/img/gif/animacion.gif')}}" alt="">
        </div>
        <div class="col live-push_auction-timer_bottom">
            <div class="text-center">
                <span class="ml-1"> <i class="fas fa-gavel fa-rotate-270 pr gavel-live"></i></span>
                <span class="d-block text-center">
                    <p class="text-dark text text-_to-auction_bottom">{{$mensajes}}</p>
                    Ofertas
                </span>
            </div>
        </div>
        <div class="col live-push_auction-timer_bottom">
            <div class="text-center">
                <i class="fas fa-user"> </i>
                <span class="d-block" id="users">
                </span>
                <span class="d-block">
                    Participantes
                </span>
            </div>
        </div>
    </div>
</div>
