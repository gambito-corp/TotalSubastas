<div class="row main-container mr-md-1 mb-5 mt-5">
    <div class="col-sm-12 mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-12 col-md-9 col-sm-12 col-xs-12 ml-md-4">
                        <article class="top-slide_carousel-item-a">
                            <figure>
                                <svg class="bd-placeholder-img rounded-sm" width="36" height="36" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                                    aria-label="Example small rounded image: 36x36">
                                    <title>Example small rounded image</title>
                                    <rect width="100%" height="100%" fill="#ffd980"></rect>
                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
                                </svg>
                                <h1 class="font-weight-bold">{{$vehiculo->Marca->nombre.' '.$vehiculo->Modelo->nombre.' '.$vehiculo->nombre}}</h1>
                                <h3>{{$vehiculo->year}}</h3>
                            </figure>
                            <ul class="nav justify-content-end">
                                <li class="nav-item text-light_darken mr-2">
                                    <span class="mr-2 "><i class="fa fa-heart-o heart" aria-hidden="true"></i> 234</span>
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
                        <div class="col-md-12 col-sm-12  ">
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
                                    <img class="rounded thumbs_auction-img  p-1" data-target='#auction-control' data-slide-to='0'
                                    src="./assets/img/thumbs/image-074.png" alt="">
                                    <img class="rounded thumbs_auction-img p-1" data-target='#auction-control' data-slide-to='1'
                                    src="./assets/img/thumbs/image-075.png" alt="">
                                    <img class="rounded thumbs_auction-img p-1" data-target="#auction-control" data-slide-to='2'
                                    src="./assets/img/thumbs/image-076.png" alt="">                
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
            <div class="col-md col-12 col-sm-12 col-xs-12 pt-5 pr-4 pl-5" id="auction-img_d">
                <div class="bd-example ">
                    <div id="auction-control" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/image-077.png" width="100%" height="400">
                            </div>
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                                    role="img" aria-label="Placeholder: Second slide">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                                    dy=".3em">Second slide</text>
                                </svg>
                            </div>
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                                    role="img" aria-label="Placeholder: Third slide">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                    dy=".3em">Third slide</text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-md-none d-flex d-flex justify-content-center mt-5">
                    <article>
                        <div class=" text-center mt-3 mb-3 auction-chevron_right">
                            <svg class="bi bi-chevron-right" href="#auction-control" role="button" data-slide="next" width="32"
                            height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <div class=" text-center mt-3 auction-chevron_left">
                            <svg class="bi bi-chevron-left" href="#auction-control" role="button" data-slide="prev" width="32"
                            height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </div>
                        <figure>
                            <fieldset class="thumbs_auction">
                            <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='0'
                                src="./assets/img/thumbs/image-074.png" alt="">
                            <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='1'
                                src="./assets/img/thumbs/image-075.png" alt="">
                            <img class="rounded pl-1 thumbs_auction-img" data-target="#auction-control" data-slide-to='2'
                                src="./assets/img/thumbs/image-076.png" alt="">
                            </fieldset>
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
    




