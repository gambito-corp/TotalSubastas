@dump($estado, $producto->finalized_at->toTimeString(), now()->toTimeString(),($producto->finalized_at->subSeconds(3)->toTimeString() <= now()->toTimeString()))
@if($estado == 'ganador')
    <p class="btn btn-success rounded-pill pr-5 pl-4 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i> Vas Ganando </p>
@endif
@if($estado == 'online')
    @auth
        <form wire:submit.prevent="online">
            <button class="btn btn-primary rounded-pill pr-3 pl-2 btn-to_action-bottom text-light">
                <i class="fas fa-eye pr-3 pl-3 "></i> Participar
            </button>
        </form>
    @else
        <a class="btn btn-success rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
@endif
@if($estado == 'puja')
    @auth
        <form wire:submit.prevent="pujar">
            <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light" id="send" wire:model="mensaje">
                <i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i>
                @empty($mensaje)
                Pujar $ {{$producto->puja + $producto->precio}}
                @else
                    {{$mensaje}}
                @endempty
            </button>
        </form>
    @else
        <a class="btn btn-success rounded-pill pr-1 pl-2 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
@endif
@if($estado == 'esperen')
    @auth
        <form wire:submit.prevent="pujar">
            <button class="btn btn-primary rounded-pill pr-5 pl-4 btn-to_action-bottom text-light">
                <i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i>
                Esperen Para Pujar
            </button>
        </form>
    @else
        <a class="btn btn-success rounded-pill pr-1 pl-2 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
    @endauth
@endif
@if($estado == 'Finalizada' || $estado == 'STOP')
    <p class="btn btn-finish rounded-pill pr-1 pl-2 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
@endif
