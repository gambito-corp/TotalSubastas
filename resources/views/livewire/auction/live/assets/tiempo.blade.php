<div class="col" >
    @if ($producto->finalized_at->subSeconds(20)<=now())
        <p class="{{$producto->finalized_at>=now()? 'col-md-2 animate__animated animate__fadeIn': 'col-md-12 animate__animated animate__fadeIn'}}">
            <div wire:poll.750ms="foo">
                {{$producto->finalized_at>=now()? 'En 00:'.$producto->finalized_at->diffInSeconds(now()): 'La Subasta finalizo, el ganador es '.$ganador }}
            @if($producto->finalized_at>=now())
                @php
                    return redirect('/')
                @endphp
            @endif
            </div>
        </p>
        @if ($producto->finalized_at>=now())
            <div class="col-md 10" >
                <div class="progress rounded-pill border border-light ml-2 animate__animated animate__fadeIn">
                    <div
                        class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                        role="progressbar"
                        aria-valuenow="{{20 - $producto->finalized_at->diffInSeconds(now())}}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: {{20*(20 - $producto->finalized_at->diffInSeconds(now()))}}% "
                    >
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>
