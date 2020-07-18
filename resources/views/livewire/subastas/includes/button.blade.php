@if($estado == 'ganador')
    <p class="btn btn-success rounded-pill pr-5 pl-4 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i> Vas Ganando </p>
@endif
@if($estado == 'online')
    @auth
        <a class="btn btn-primary rounded-pill pr-3 pl-2 btn-to_action-bottom text-light" href="{{ route('auctionLiveDetail', ['id' => \App\Helpers\Gambito::hash($producto->id)])}} "><i class="fas fa-eye pr-3 pl-3 "></i> Participar </a>
    @else
        <a class="btn btn-success rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
@endif
@if($estado == 'puja')
    @auth

        <form wire:submit.prevent="pujar">
            <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light"><i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i> Pujar {{$producto->puja + $producto->precio}} $ </button>
        </form>
    @else
        <a class="btn btn-success rounded-pill pr-1 pl-2 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
@endif
@if($estado == 'Finalizada')
    <p class="btn btn-finish rounded-pill pr-1 pl-2 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
@endif
