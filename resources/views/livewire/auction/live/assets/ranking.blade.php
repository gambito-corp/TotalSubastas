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





<div class="col-md-3 order-md-3 live-push_action-ranking pl-0 pr-0">
    <div class="">
        <div class="invisible" wire:pool.100ms="foo">
            {{now()}}
        </div>
        <article class="border-bottom text-center">
            <h5 class="text-uppercase ranking_live">Top de Pujas</h5>
        </article>
    </div>


    <div class="col-12 text-center pl-0 pr-0">
        <div class="col-12 pt-2 d-flex pb-2 pl-0 pr-0 border-bottom" style="margin-bottom: 5px;">
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
        <div class="col-12">
            <div class="row pl-0 pr-0" style="overflow: auto;">
    {{--            {{dd($this->resultados->groupBy('user_id')->sortByDesc('*.message'))}}--}}
                @forelse($this->resultados as $key => $resultado)
    {{--                {{dd($resultado)}}--}}
                    <div class="col-md-4 text-darken font-weight-normal usuario-puja-subasta">
                            {{$key+1}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal usuario-puja-subasta">
                        {{$resultado['usuario']['name']}}
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text usuario-puja-subasta">
                        {{$resultado['cantidad']}}
                    </div>
                @empty
                    <div class="col-md-4 text-darken font-weight-normal">
                        -
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal usuario-puja-subasta">
                        -
                    </div>
                    <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                        -
                    </div>
                @endforelse
            </div>

        </div>

    </div>
</div>
