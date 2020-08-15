<div class="row main-container mr-md-0 ml-md-0 mb-5 mt-5">
    <div class="col-sm-12 mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-12 col-md-9 col-sm-12 col-xs-12 ml-md-4">
                        <article class="top-slide_carousel-item-a">
                            <figure>
                                @include('assets.imagen', ['carpeta' => 'empresa', 'id' => $producto->Empresa->id, 'ancho' => '100', ])
                                <h1 class="font-weight-bold">{{$producto->nombre}}</h1>
                                <h3>{{$vehiculo->year}}</h3>
                            </figure>
                            <ul class="nav justify-content-end">
                                <li class="nav-item text-light_darken mr-2">
                                    <span class="mr-2 " wire:click="addLike({{$producto->id}})" wire:model="like">
                                        <i class="fa fa-heart-o heart" aria-hidden="true"></i>
                                        {{count($this->like->where('producto_id', $producto->id))}}
                                    </span>
                                </li>
                                <li class="nav-item text-light_darken mr-4">
                                    <span id="hammer" class="mr-2"> <i class="fas  fa-gavel fa-rotate-270 ml-2"></i> 4</span>
                                </li>
                                <li class="nav-item text-light_darken mr-4">
                                    <span class="mr-2"><i class="fas fa-user mr-2"></i>23</span>
                                    <!-- counter by persons in this auction -->
                                </li>
                            </ul>
                            <hr class="my-4" />
                        </article>
                        <div class="col-md-12 col-sm-12" >

                            <div class="jumbotron auction-jumbotron mr-2 p-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col pt-3 ">
                                            <p class="title-d_sheet-jumb text-center">cierra en</p>
                                            <div class="d-flex">
                                                <p class="title-d_sheet-sp mr-3" id="regresiva">{{$producto->finalized_at <= now()? 'Subasta Finalizada':''}}</p>
                                            </div>
                                        </div>
                                        <div class="col pt-3">
                                            <p class="title-d_sheet-jumb text-center">fecha en vivo</p>
                                            <span class="title-d_sheet-sp">Mayo</span> <span class="title-d_sheet-sp">29 <br> </span>
                                            <span class="title-d_sheet-sp">7:15 pm </span> <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @livewire('subastas.show.show.buttom', ['producto' => $producto])
                        </div>
                    </div>
                    <div class="col-md-2 d-none d-sm-none d-md-block">
                        <article class="thumbs_auction-md">
                            <figure>
                                <div class="mb-3 text-center">
                                    <svg id="i-chevron-top" href="#auction-control" role="button" data-slide="prev"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none"
                                    stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 20 L16 8 2 20"></path>
                                    </svg>
                                </div>

                                <fieldset class="thumbs_auction">
                                    @forelse($producto->Imagenes as $imagen)
                                        <img class="rounded p-1 thumbs_auction-img" width="60" height="60" data-target='#auction-control' data-slide-to='{{$loop->index}}'
                                             src="{{asset($imagen->imagen)}}" alt="">
                                    @empty
                                        @if($producto->imagen != null)
                                            <img class="rounded p-1 thumbs_auction-img" width="60" height="60" data-target='#auction-control' data-slide-to='0'
                                                 src="{{asset($producto->imagen)}}" alt="">
                                        @else
                                            <img class="rounded pl-1 thumbs_auction-img" width="60" height="60" data-target="#auction-control" data-slide-to='0'
                                                 src="{{asset('assets/img/thumbs/image-076.png')}}" alt="">
                                        @endif
                                    @endforelse
                                </fieldset>

                                <div class=" text-center mt-3">
                                    <svg id="i-chevron-bottom" href="#auction-control" role="button" data-slide="next"
                                    data-target='#auction-control' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32"
                                    height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M30 12 L16 24 2 12"></path>
                                    </svg>
                                </div>

                                <div class="display-1 d-flex justify-content-center text-center caret-play_auction-gallery">
                                    <ul class="nav  ml-2 mt-4">
                                    <li>
                                        <a class="text-darken"> <i class="fas fa-caret-right ml-1"></i> </a>
                                    </li>
                                    </ul>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
            @include('livewire.subastas.includes.slide')
        </div>
    </div>
    {{-- {!! $producto->started_at->toCookieString()!!} --}}
    @push('scripts')
    <script>
        var hora = @json($producto->started_at);
        const getRemainTime = deadline => {
            let now = new Date(),
                remainTime = (new Date(deadline) - now +1000) / 1000,
                remainSeconds = ('0'+Math.floor(remainTime % 60)).slice(-2),
                remainMinutes = ('0'+Math.floor(remainTime / 60 % 60)).slice(-2),
                remainHours = ('0'+Math.floor(remainTime / 3600 % 24)).slice(-2),
                remainDays = Math.floor(remainTime / (3600 * 24));
            return {
                remainTime,
                remainSeconds,
                remainMinutes,
                remainHours,
                remainDays
            }
        };

        const countdown = (deadline, elem, finalMessage) =>{
            const el = document.getElementById(elem);

            const timerUpdate = setInterval(()=>{
                let t = getRemainTime(deadline);
                el.innerHTML= "<p>"+t.remainDays+" Dias "+t.remainHours+" : "+t.remainMinutes+" : "+t.remainSeconds+"</p>";
                if(t.remainTime <= 1){
                    clearInterval(timerUpdate);
                    el.innerHTML = finalMessage;
                }

            }, 1000)
        };

        countdown(hora, 'regresiva', 'La Subasta Inicio');
        // console.log(Date(hora));
    </script>
    @endpush
</div>





