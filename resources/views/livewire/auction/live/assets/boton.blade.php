<div class="col mt-5" wire:pool.125ms>
    @auth
        @if($producto->finalized_at <= now()->subSecond())
            <p class="btn btn-finish rounded-pill pr-1 pl-2 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
            @php
                sleep(1);
                dd('hola mundo');
            @endphp
        @elseif($producto->started_at->sub(15, 'Minutes')<=now() && $producto->finalized_at >= now() && isset($online))
            <a class="btn btn-primary rounded-pill pr-3 pl-2 btn-to_action-bottom text-light" href="{{ route('auctionLiveDetail', ['id' => \App\Helpers\Gambito::hash($producto->id)])}} "><i class="fas fa-eye pr-3 pl-3 "></i> Participar </a>
        @else
            @dump($estado)
            @unless($estado)
                <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" id="send" wire:click="pujar">
                    <i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i>
                    Pujar {{$producto->puja + $producto->precio}} $
                </button>
            @else
                <p class="btn btn-success rounded-pill pr-5 pl-4 text-light" style="cursor:none"><i class="fas fa-star  pr-3 pl-3 "></i> Vas Ganando </p>
            @endunless
        @endif
    @else
        <a class="btn btn-success rounded-pill pr-1 pl-2 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
</div>
