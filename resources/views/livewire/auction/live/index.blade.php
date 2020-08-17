<div class="row">
    <!-- main content -->
    <div class="row mt-5 margin-row">
        <div class="row bg-dark text-light pt-4 pl-4 pr-4 pb-4 margin-row" style="border-radius: 10px;"  onmouseover="bottom()">

            <div id="carouselExampleIndicators" class="carousel slide col-md-3 col-sm-12" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @forelse($pictures as $value)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}"></li>
                    @empty
                    @endforelse
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @include('assets.imagen', ['carpeta' => 'producto', 'id' => $producto->id, 'ancho' => '240', 'alto' => '231', 'class'=>'rounded mx-auto d-block img-fluid' ])
                    </div>
                    @forelse($pictures as $value)
                        <div class="carousel-item">
                            @include('assets.imagen', [
                                'carpeta' => 'set',
                                 'id' => $value->id,
                                 'ancho' => '240',
                                 'alto' => '231',
                                 'class' => 'rounded mx-auto d-block img-fluid'
                                 ])
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            @livewire('auction.live.assets.datos', ['producto' => $producto, 'vehiculo' => $vehiculo, 'identificador'=>$identificador])
            <div class="col-md-3 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h6>
                            <span> INICIO <br /></span>
                            <span> {{$hace}}</span>
                        </h6>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3>
                            <i>
                                <b>
                                    {{Auth()->user()->name}}
                                </b>
                            </i>
                        </h3>
                    </div>
                    @livewire('auction.live.assets.status-win', ['producto' => $producto, 'identificador'=>$identificador])
                    @livewire('auction.live.assets.tiempo', ['producto' => $producto, 'identificador'=>$identificador])
                </div>
                <div class="row" wire:poll.500ms="estado">

{{--                    @dump($mensaje)--}}
                    @include('livewire.subastas.includes.button')
{{--                    @livewire('auction.live.assets.boton', ['producto' => $producto, 'estado' => $estado, 'identificador'=>$identificador, 'end' => $end])--}}
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="row mt-2 justify-content-between margin-row width-100 mb-5">
        @livewire('auction.live.assets.contador', ['mensajes' => $mensajes,'identificador'=>$identificador])
        @livewire('auction.live.assets.mensajes', ['mensajes' => $mensajes,'identificador'=>$identificador])
        @livewire('auction.live.assets.ranking', ['identificador'=>$identificador])
    </div>
</div>
@push('scripts')
    <script>
        var scroll = document.getElementById("scroll");
        scroll.scrollTop = scroll.scrollHeight;
        function bottom() {
            scroll.scrollBy(0, 200);
        }
    </script>

    <script>
        const UsersElement = document.getElementById('users');
        const productoElement =  @json($producto);
        var contador = 0;
        // Echo.join(`subasta.${productoElement.id}`)
        //     .here((users) =>{
        //         contador = users.length;
        //         let element = document.createElement('p');
        //         element.setAttribute('class', 'text-dark text-center text text-_to-auction_bottom')
        //         element.setAttribute('id', 'cuenta')
        //         element.innerText = contador;
        //         UsersElement.append(element);
        //     })
        //     .joining((users)=>{
        //         contador = users.length;
        //         contador++;
        //         let element = document.createElement('p');
        //         element.setAttribute('class', 'text-dark text-center text text-_to-auction_bottom')
        //         element.setAttribute('id', 'cuenta')
        //         element.innerText = contador;
        //         UsersElement.append(element);
        //         // console.log(contador + ' Metodo joining');
        //     })
        //     .leaving((users)=>{
        //         contador = users.length;
        //         contador--;
        //         let element = document.createElement('p');
        //         element.setAttribute('class', 'text-dark text-center text text-_to-auction_bottom')
        //         element.setAttribute('id', 'cuenta')
        //         element.innerText = contador;
        //         UsersElement.append(element);
        //     })
    </script>
@endpush
@push('styles')
    <style>
        .scroll{
            height: 420px;
            overflow: auto;
            -ms-overflow-style:none;
            scrollbar-width:none;
        }
        .scroll::-webkit-scrollbar{
            display:none;
        }

        .chat-box-txt{
            margin-block-end:0px;
        }

        .chat-box-user{
            background-color: #4592FF;
            width:auto;
            margin: 0 0 0 40%;
            box-sizing:content-box;
            padding-top: 0.25rem;
            padding-bottom: 0rem;
        }

        .chat-box-else{
            margin:0 40% 0 0;
            width:auto;
            box-sizing:content-box;
            padding-top: 0.25rem;
            padding-bottom: 0rem;
        }

        .margin-row{
            margin-left:0%;
            margin-right:0%;
        }

        .align{
            text-align: center;
            margin:auto;
        }
        .width-100 {
            width: 100%;
        }
        .gif-size {
            height: 100px;
            width: 100px;
        }
    </style>
@endpush



