<div class="col-md-3 order-md-3 live-push_action-ranking">
    <div class="invisible" wire:pool.100ms="foo">
        {{now()}}
    </div>
    <article class="border-bottom">
        <h5 class="text-uppercase ranking_live">ranking</h5>
    </article>
    <div class="row p-4">
        <div class="col-12 pt-2 d-flex pb-2 pl-0 border-bottom">
            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                Puesto
            </div>
            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                Usuario
            </div>
            <div class="col-md-4 text-darken text-to_title-auction_ranking">
                Oferta
            </div>
        </div>
        <div class="row" style="height:200px; overflow: auto;">
            @forelse($this->resultados->groupBy('user_id')->sortByDesc('*.message') as $resultado)

                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                    <div class="col-md-4 text-darken font-weight-normal">
                        {{$contador++}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal">
                        {{$resultado->last()->Usuario->name}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        {{$resultado->last()->message}}
                    </div>
                </div>
            @empty
                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                    <div class="col-md-4 text-darken font-weight-normal">
                        Sin Rank
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal">
                        Sin Rank
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        Sin Rank
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
