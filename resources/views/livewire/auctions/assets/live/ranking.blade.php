<div class="col-md-3 mt-sm-4 order-md-3 live-push_action-ranking">
    <article class="border-bottom">
        <h5 class="text-uppercase ranking_live">ranking</h5>
    </article>
    <div class="row p-4">
        <div class="col-12 pt-2 d-flex pb-2  border-bottom">
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
            @for($c=0; $c<6; $c++)
                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                    <div class="col-md-4 text-darken font-weight-normal">
                        1
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal">
                        Usuario
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        $ 12800
                    </div>
                </div>
            @endfor

        </div>
    </div>
</div>
