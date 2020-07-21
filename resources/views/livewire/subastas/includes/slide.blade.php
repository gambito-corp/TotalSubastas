<div class="col-md col-12 col-sm-12 col-xs-12 pt-5 pr-4 pl-5" id="auction-img_d">
    <div class="bd-example ">
        <div id="auction-control" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
{{--                Rotacion de Activos--}}
                @forelse($producto->Imagenes as $imagen)
                    <div class="carousel-item {{$loop->first? 'active': ''}}">
                        <img src="{{asset($imagen->imagen)}}" width="100%" height="400">
                    </div>
                @empty
                    @if($producto->imagen != null)
                        <div class="carousel-item active">
                            <img src="{{asset($producto->imagen)}}" width="100%" height="400">
                        </div>
                    @else
                        <div class="carousel-item active">
                            <img src="{{asset('img/vehiculos/default.jpg')}}" width="100%" height="400">
                        </div>
                    @endif
                @endforelse
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
                    <!-- HOLA MUNDOOOOOOO IR A LINEA 287 DESDE LA 347 -->
                    @forelse($producto->Imagenes as $imagen)
                        <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='{{$loop->index}}'
                             src="{{asset($imagen->imagen)}}" alt="">
                    @empty
                        @if($producto->imagen != null)
                            <img class="rounded p-1 thumbs_auction-img" data-target='#auction-control' data-slide-to='0'
                                 src="{{asset($producto->imagen)}}" alt="">
                        @else
                            <img class="rounded pl-1 thumbs_auction-img" data-target="#auction-control" data-slide-to='0'
                                 src="{{asset('assets/img/thumbs/image-076.png')}}" alt="">
                        @endif
                    @endforelse
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
