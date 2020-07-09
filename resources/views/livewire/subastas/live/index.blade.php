<div wire:poll.750ms="$refresh">
    @php
        if($producto->finalized_at<=now()){
            Artisan::call('auction:end L9fpcBfzhyiBsOtL');
        }
    @endphp
    {{-- panel de control de la subasta --}}
    <div class="container" style="border-radius: 10px">
        <div class="row mt-5 bg-dark text-light p-4 live--central redondo-px-10">
            <div class="col-md-3 col-sm-12">
                <img src="{{asset('assets/img/image-077.png')}}" class="rounded mx-auto d-block img-fluid" alt="" />
            </div>
            <div class="col-md-5">
                <h2 class="ml-2">{{$vehiculo->Marca->nombre.' '.$vehiculo->Modelo->nombre.' '.$vehiculo->nombre}}</h2>
                <p class="ml-2">{{$vehiculo->year}}</p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-capitalize">
                                Garantia
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="border border-light rounded-lg text-center text-capitalize">
                                $ {{$producto->garantia}}
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-capitalize">
                                Usuario Ganador
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="border border-light rounded-lg text-center text-capitalize">
                                {{$producto->Usuario->name}}
                            </p>
                        </div> 
                    </div>
                    <div class="row">                       
                        <div class="col-md-3">
                            <p class="text-capitalize">
                                Comision
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="border border-light rounded-lg text-center text-capitalize">
                                {{$producto->comision}}
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-capitalize">
                                Tipo subasta
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="border border-light rounded-lg text-center text-capitalize">
                                subasta
                            </p>
                        </div>                        
                    </div>
                    <div class="row">
                        <img src="{{asset('assets\img\empresas\bancoFalabella.jpg')}}" class="rounded-circle my-auto d-inline-flex img-fluid" width="50" alt="">
                        <span class="my-auto px-2">concedido por <strong>{{$producto->Lote->Empresa->razon_social}}</strong></span>
                        <h6 class="my-auto px-2">{{$vehiculo->year}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h5>
                            <span> INICIO <br /></span>
                            <span> {{$producto->started_at->diffForHumans()}}</span>
                        </h5>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h5>
                            {{Auth()->user()->name}}
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left text-capitalize d-inline-flex d-flex flex-row" wire:model="ganador"> se Lo va LLevando {{$producto->Usuario->name}} a </h5>
                        <h4 class="text-right d-flex d-inline-flex flex-row-reverse"> $ {{$producto->precio}}</h4>
                    </div>
                </div>
                <div class="row">
                    
                    @if ($producto->finalized_at->subSeconds(5)<=now())                    
                    <div class="{{$producto->finalized_at>=now()? 'col-md-2 animate__animated animate__fadeIn': 'col-md-12 animate__animated animate__fadeIn'}}">
                        {{$producto->finalized_at>=now()? 'En 00:0'.$producto->finalized_at->diffInSeconds(now()): 'La Subasta finalizo, el ganador es '.$producto->Usuario->name }}                        
                    </div>
                        @if ($producto->finalized_at>=now())
                        <div class="col-md 10">
                            <div class="progress rounded-pill border border-light ml-2 animate__animated animate__fadeIn" wire:model="resultado">
                                <div 
                                    class="progress-bar progress-bar-striped progress-bar-animated bg-warning" 
                                    role="progressbar" 
                                    aria-valuenow="{{5 - $producto->finalized_at->diffInSeconds(now())}}" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100" 
                                    style="width: {{20*(5 - $producto->finalized_at->diffInSeconds(now()))}}% "
                                >                                        
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                </div>
                <div class="row d-flex justify-content-center align-items-end mt-4">
                    @include('livewire.subastas.includes.button')
                </div>                
            </div>
        </div>
    </div>

    {{-- controles visuales de la subasta --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 pl--1 bg-blanco">
                <div class="row">
                    <div class="col-md-12">
                        <article class="border-bottom">
                            <h5 class="text-uppercase r-timer_live">Subasta en vivo</h5>
                        </article>
                    </div>                    
                </div>
                <div class="row p-4">
                    <div class="col-md-12">
                        <p></p>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-md-12 pt-5 pb-5">
                        <p></p>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-md-6">
                        <span class="ml-1"> <i class="fas fa-gavel fa-rotate-270 pr gavel-live"></i></span>
                        <span class="d-block text-center">
                            <p class="text-dark text text-_to-auction_bottom" wire:model="mensajes">{{count($mensajes)}}</p>
                            Ofertas
                        </span>
                    </div>
                    <div class="col-md-6">
                        <span class="ml-1"> <i class="fas fa-user pr gavel-live"></i></span>
                        <span class="d-block text-center">
                            <p class="text-dark text text-_to-auction_bottom">{{count($resultado)}}</p>
                            Participantes
                        </span>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 bg-dark rounded scroll" wire:model="mensajes">
                @foreach($mensajes as $value )
                    @if ($value->user_id == Auth::id())
                        <div class="mt-2 alert alert-primary text-light rounded-pill ancho--220 float-right d-flex align-items-end animate__animated animate__backInLeft" width="220px">
                            <p>
                                <strong>{{$value->Usuario->name}}</strong>  oferto  <strong>$ {{$value->message}}</strong>
                            </p>
                        </div>
                        
                    @else
                        <div class="mt-2 alert alert-light text-dark rounded-pill ancho--220 float-left d-flex align-items-end animate__animated animate__backInRight" width="220 px">
                            <p>
                                <strong>{{$value->Usuario->name}}</strong>  oferto  <strong>$ {{$value->message}}</strong>
                            </p>
                        </div>
                        
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 pl--2 bg-blanco">
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
                    <div class="row" style="height:200px; overflow: auto;" wire:model="resultado">
                        @forelse($resultado as $key => $rank)
                            <div class="col-12 pt-2 d-flex pb-2  border-bottom ">
                                <div class="col-md-4 text-darken font-weight-normal">
                                    @isset($rank)
                                    {{$key}}
                                    @else
                                    todavia nadie pujo
                                        @endisset
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal">
                                    @isset($rank)
                                        {{$rank[0]['usuario']['name']}}
                                    @else
                                        todavia nadie pujo
                                    @endisset
                                </div>
                                <div class="col-md-4 text-darken font-weight-normal text-to_best-auction ranking_to-auction_text">
                                    @isset($rank[$key])
                                        $ {{end($rank)['message']}}
                                    @else
                                        todavia nadie pujo
                                    @endisset
                                </div>
                            </div>
                        @empty
                            No Hay Ranking
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('styles')
    <style>
        .scroll{
            height: 375px;
            overflow: auto;
        }
    </style>
@endpush
