<div class="col mt-5"  onmouseover="bottom()">
    <div class="invisible" wire:pool.100ms="estado">
        {{now()}}
    </div>
    @dump($end)
    @dump($time)
    @auth
        @if($end == 'cortar')
            <p class="btn btn-finish rounded-pill pr-1 pl-2 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
{{--        @elseif($producto->started_at->sub(15, 'Minutes')<=now() && $producto->finalized_at >= now() && isset($online))--}}
{{--            <a class="btn btn-primary rounded-pill pr-3 pl-2 btn-to_action-bottom text-light" href="{{ route('auctionLiveDetail', ['id' => \App\Helpers\Gambito::hash($producto->id)])}} "><i class="fas fa-eye pr-3 pl-3 "></i> Participar </a>--}}
        @else
            @unless($estado)
                <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" id="send" wire:click="pujar">
                    <i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i>
                    Pujar {{$producto->puja + $producto->precio}} $
                </button>
            @else
                <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" id="send" wire:click="pujar">
                    <i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i>
                    Pujar {{$producto->puja + $producto->precio}} $
                </button>
{{--                <p class="btn btn-success rounded-pill pr-5 pl-4 text-light" style="cursor:none"><i class="fas fa-star  pr-3 pl-3 " wire:click="pujar"></i> Vas Ganando </p>--}}
            @endunless
        @endif
    @else
        <a class="btn btn-success rounded-pill pr-1 pl-2 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
</div>
