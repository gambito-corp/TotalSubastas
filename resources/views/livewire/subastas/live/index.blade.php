<div class="row" wire:poll.750ms="$refresh">
    @php
        if($producto->finalized_at<=now()){
            Artisan::call('auction:end L9fpcBfzhyiBsOtL');
        }
    @endphp 
    <!-- main content -->
    <div class="col-md col-md-12 mt-5">
        <div class="row bg-dark text-light pt-4 pl-4 pr-4 pb-4" style="border-radius: 10px;">
            <div class="col-md-3 col-sm-12">
                <img src="{{asset('assets/img/image-077.png')}}" width="240px" class="rounded mx-auto d-block img-fluid" height="231" alt="" />
            </div>
            <div class="col-md-6 col-sm-12">
                <h1 class="ml-2">{{$vehiculo->Marca->nombre.' '.$vehiculo->Modelo->nombre.' '.$vehiculo->nombre}}</h1>
                <p class="ml-2">{{$vehiculo->year}}</p>
                <div class="col-md-9 pd-0 m-0 pl-4">
                    <!--  -->
                    <div class="row row-cols-4">
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light p-0 m-0 text-s_gd-sheet">
                            Garantia
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                            <button
                            class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text m-0">
                            $ {{$producto->garantia}}
                            </button>
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                            Ganador actual
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                            <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                {{$producto->Usuario->name}}
                            </button>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row row-cols-4 mt-2">
                        <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                            comision
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                            <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                {{$producto->comision}} %
                            </button>
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light text-s_gd-sheet">
                            Tipo subasta
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                            <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                                subasta
                            </button>
                        </div>
                    </div>
                    <div class="row-cols-2">
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="row pt-3 row-cols pl-3">
                            <figure>
                                <img src="{{asset('assets\img\empresas\bancoFalabella.jpg')}}" class="rounded-circle my-auto d-inline-flex img-fluid" width="50" alt="">
                                <span class="my-auto px-2">concedido por <strong>{{$producto->Lote->Empresa->razon_social}}</strong></span>
                                <h5 class="my-auto px-2">{{$vehiculo->year}}</h5>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h5>
                            <span> INICIO <br /></span>
                            <span> {{$producto->started_at->diffForHumans()}}</span>
                        </h5>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3>
                            {{Auth()->user()->name}}
                        </h3>
                    </div>
                    <div class="col-12">
                        <span class="text-badge_live" wire:model="ganador">  se Lo va LLevando {{$producto->Usuario->name}} a </span>
                        <span class="ml-3 pl-3 badge_live"> $ {{$producto->precio}}</span>
                    </div>
                    <div class="col">
                        @if ($producto->finalized_at->subSeconds(5)<=now())                    
                            <p 
                                class="
                                {{$producto->finalized_at>=now()? 'col-md-2 animate__animated animate__fadeIn': 'col-md-12 animate__animated animate__fadeIn'}}"
                                >
                                    {{$producto->finalized_at>=now()? 'En 00:0'.$producto->finalized_at->diffInSeconds(now()): 'La Subasta finalizo, el ganador es '.$producto->Usuario->name }}                        
                            </p>
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
                </div>
                <div class="row">
                    <div class="col mt-5">
                        @include('livewire.subastas.includes.button')
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <img src="" alt="" />
        </div>
    </div>
    <div class="row mt-2 justify-content-between  mb-5">
        <div class=" col col-md-3 order-md-1 live-push_action-ranking">
            <article class="border-bottom">
                <h5 class="text-uppercase r-timer_live">Subasta en vivo</h5>
            </article>
            <div class="row p-4">
                <div class="col-12 pt-5 pb-5">
                    <p>
        
                    </p>
                </div>                   
                <div class="col live-push_auction-timer_bottom">
                    <div class="text-center">
                        <span class="ml-1"> <i class="fas fa-gavel fa-rotate-270 pr gavel-live"></i></span>
                        <span class="d-block text-center">
                            <p class="text-dark text text-_to-auction_bottom">24</p>
                            Ofertas
                        </span>
                    </div>
                </div>
                <div class="col live-push_auction-timer_bottom">
                    <div class="text-center">
                        <i class="fas fa-user"> </i>
                        <span class="d-block">
                            <p class="text-dark text text-_to-auction_bottom">30</p>
                            Participa<br>ntes
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 order-md-2 mt-2 mb-sm-4 p-4 text-light rounded bg-dark scroll" style="height: 299px;">
            @foreach($mensajes as $value )
                    @if ($value->user_id == Auth::id())
                        <div class="mt-2 alert alert-primary text-light rounded-pill ancho--220 float-right d-flex align-items-end animate__animated animate__backInLeft" width="55%">
                            <p>
                                <strong>{{$value->Usuario->name}}</strong>  ofertó  <strong>$ {{$value->message}}</strong>
                            </p>
                        </div>
                        <br>
                    @else
                        <div class="mt-2 alert alert-light text-dark rounded-pill ancho--220 float-left d-flex align-items-end animate__animated animate__backInRight" width="55%">
                            <p>
                                <strong>{{$value->Usuario->name}}</strong>  oferto  <strong>$ {{$value->message}}</strong>
                            </p>
                        </div>
                        <br>
                    @endif
                    <br>
                @endforeach          
        </div>

        <div class="col-md-3 order-md-3 live-push_action-ranking">
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
