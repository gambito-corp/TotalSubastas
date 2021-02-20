@extends('layouts.app')
@section('content')
    @push('styles')
    @endpush
    @isset($modal)
        @if($modal == 'modal')
        @endif
    @endisset
    <div class="container .container-slider-2">
        <div class="row mt-5 container-slider">
            <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
                <ol class="carousel-indicators" style="opacity: 0.5;">
                    @forelse($slide as $data)
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
                    @empty
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @endforelse
                </ol>
                
                <div class="carousel-inner" >
                    
                    @forelse($slide as $data)
                
                    <div class="carousel-item col-12 {{($loop->index == 0)?'active':''}}">
                    {{-- @include('assets.imagen', ['carpeta' => 'slide', 'id' => $data->id, 'alto' => '352', ]) --}}
                        
                            <img class="carousel-item-a_imagen" src="./assets/img/banner2.png" height="352px" alt="...">
                        
                        </div>
                    @empty
                    <div class="carousel-item active">
                        
                            <img class=" carousel-item-a_imagen" src="./assets/img/banner2.png" height="352px" alt="...">
                        
                    </div>
                    @endforelse
                
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-md-6  sec_in-out order-md-2">
                <div class="row slide-border container-slider-banner col-12">
                    <img class="carousel-item-a_imagen" src="{{asset('img/martillo.jpeg')}}" height="352px" alt="...">
                </div>
            </div>
        </div>
            @livewire('index.index')
        
    </div>
    </div>
@endsection
