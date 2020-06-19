<div>
    <h2 class="float-left">Banco Falabella sac</h2>
    <small class="text-muted float-right"> Mayo 29, 7:11</small>
    <div class="clearfix"></div>
    <hr>
    <!--Carousel Wrapper-->
    @php
        $productos = App\Producto::all();
            $users = App\User::all();
    @endphp
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
        @foreach ($productos->chunk(3) as $key => $productCollection)
            <div class="row">
                <!--First slide-->
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    @foreach ($productCollection as $product)
                        <div class="col-md-4" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('img/vehiculos/coche.png')}}" alt="Imagen del Vehiculo">
                                <div class="card-body">
                                    <h4 class="card-title text-success">subasta</h4>
                                    <p class="card-text">Chevrolet A91/2018</p>
                                    <a class="btn btn-success">$ 3500 <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <!--/.First slide-->
            </div>
        @endforeach
        </div>
        <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->




</div>
