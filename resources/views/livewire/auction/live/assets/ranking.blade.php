{{--<div class="col-md-3 order-md-3 live-push_action-ranking">--}}
{{--    <div class="invisible" wire:pool.100ms="foo">--}}
{{--        {{now()}}--}}
{{--    </div>--}}
{{--    <article class="border-bottom">--}}
{{--        <h5 class="text-uppercase ranking_live">ranking</h5>--}}
{{--    </article>--}}
{{--    <table class="container">--}}
{{--        <thead class="row">--}}
{{--            <tr class="col-md-12 border-bottom">--}}
{{--                <th class="col-md-4 text-darken text-to_title-auction_ranking text-center">--}}
{{--                    Puesto--}}
{{--                </th>--}}
{{--                <th class="col-md-4 text-darken text-to_title-auction_ranking text-center">--}}
{{--                    Usuario--}}
{{--                </th>--}}
{{--                <th class="col-md-4 text-darken text-to_title-auction_ranking text-center">--}}
{{--                    Ofertas--}}
{{--                </th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody class="row" style="height:200px; overflow: auto;">--}}
{{--        @forelse($this->resultados as $key => $resultado)--}}
{{--            <tr class="col-md-12 border-bottom">--}}
{{--                <td class="col-md-4 text-darken">{{$key+1}}</td>--}}
{{--                <td class="col-md-4 text-darken">{{$resultado['usuario']['name']}}</td>--}}
{{--                <td class="col-md-4 text-darken text-to_best-auction ranking_to-auction_text">{{$resultado['cantidad']}}</td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr class="col-md-12 border-bottom">--}}
{{--                <td class="col-md-4 text-darken font-weight-normal text-center">0</td>--}}
{{--                <td class="col-md-4 text-darken font-weight-normal text-center">Nadie</td>--}}
{{--                <td class="col-md-4 text-darken font-weight-normal text-center text-to_best-auction ranking_to-auction_text">0</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}


{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}





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
                Ofertas
            </div>
        </div>
        <div class="row" style="height:200px; overflow: auto;">
{{--            {{dd($this->resultados->groupBy('user_id')->sortByDesc('*.message'))}}--}}
            @forelse($this->resultados as $key => $resultado)
{{--                {{dd($resultado)}}--}}
                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                    <div class="col-md-4 text-darken font-weight-normal">
                        {{$key+1}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal">
                        {{$resultado['usuario']['name']}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        {{$resultado['cantidad']}}
                    </div>
                </div>
            @empty
                <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                    <div class="col-md-4 text-darken font-weight-normal">
                        -
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal">
                        -
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        -
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
