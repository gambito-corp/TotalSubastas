<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @forelse($data as $dat)
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        @empty

        @endforelse
    </ol>
    <div class="carousel-inner redondo-5">
        @forelse($data as $key => $dat)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{asset('img/carros.png')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="rounded-circle">
                        <img src="{{asset('img/empresas/bancoFalabella.jpg')}}" alt="" class="rounded-circle" width="100">
                    </div>
                    <p>Saga Falabella {{$dat}}</p>
                    <p>26.05.20</p>
                    <h2>GRAN SUBASTA 10 ACTIVOS PODRÁN SER TUYOS</h2>
                    <a href="#" class="btn btn-primary redondo">
                        <i class="fa fa-image"></i>
                        ver lote <span class="numero">10</span>
                    </a>
                </div>
            </div>
        @empty

        @endforelse
    </div>
</div>
