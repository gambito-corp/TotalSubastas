{{-- @dump($estado, $producto->finalized_at->toTimeString(), now()->toTimeString(),($producto->finalized_at->subSeconds(3)->toTimeString() <= now()->toTimeString())) --}}
@auth
    @php
        $id = \App\LegalPerson::where('user_id', auth()->user()->id)->first();

    @endphp
    @if($producto->propietario == $id->id)
        @php $estado = 'Propietario'; @endphp
    @endif
@endauth
    @if($estado == 'ganador')
        <p class="btn btn-success rounded-pill text-light btn-subasta-ts" style="cursor:none" ><i class="fas fa-star"></i> Vas Ganando </p>
    @endif
    @if($estado == 'online')
        @auth
            <form wire:submit.prevent="online">
                <button class="btn btn-primary rounded-pill  btn-to_action-bottom text-light btn-subasta-ts">
                    <i class="fas fa-eye"></i> Ingresar a Sala
                </button>
            </form>
        @else
            <a class="btn btn-success rounded-pill btn-to_action-bottom text-light btn-subasta-ts" href="{{ route('login')}} "><i class="fas fa-user"></i> Ingresar </a>
        @endauth
    @endif
    @if($estado == 'puja')
        @auth
            <form wire:submit.prevent="pujar">
                <button class="btn btn-primary rounded-pill  btn-to_action-bottom text-light btn-subasta-ts" id="send" wire:model="mensaje">
                    <i class="fas fa-gavel fa-rotate-270"></i>
                    @empty($mensaje)
                        Pujar $ {{$producto->puja + $producto->precio}}
                    @else
                        {{$mensaje}}
                    @endempty
                </button>
            </form>
        @else
            <a class="btn btn-success rounded-pill  btn-to_action-bottom text-light btn-subasta-ts" href="{{ route('login')}} "><i class="fas fa-user"></i> Logueate </a>
        @endauth
    @endif
    @if($estado == 'esperen')
        @auth
            <form wire:submit.prevent="pujar">
                <button class="btn btn-primary rounded-pill btn-to_action-bottom text-light btn-subasta-ts">
                    <i class="fas fa-gavel fa-rotate-270"></i>
                    Esperen Para Pujar
                </button>
            </form>
        @else
            <a class="btn btn-success rounded-pill btn-to_action-bottom text-light btn-subasta-ts" href="{{ route('login')}} "><i class="fas fa-user"></i> Logueate </a>
        @endauth
    @endif
    @if($estado == 'Finalizada' || $estado == 'STOP')
        <p class="btn btn-finish rounded-pill pr-1 pl-2 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
    @endif
    @if($estado == 'Propietario')
        <form wire:submit.prevent="online">
            <button class="btn btn-primary p-2 rounded-pill">
                <i class="fas fa-eye"></i> El Propietario del Vehiculo No Puede Pujar
            </button>
        </form>
    @endif

