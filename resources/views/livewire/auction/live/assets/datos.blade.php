<div class="col-md-6 col-sm-12"  onmouseover="bottom()">
    <h1 class="ml-2">{{$nombre}}</h1>
    <p class="ml-2">{{$year}}</p>
    <div class="col-md-9 pd-0 m-0 pl-4">
        <div class="row row-cols-4">
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light p-0 m-0 text-s_gd-sheet">
                Garantia
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button
                    class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text m-0">
                    $ {{$garantia}}
                </button>
            </div>
            <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                Ganador actual
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                    {{$ganador}}
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
                    {{$comision}} %
                </button>
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light text-s_gd-sheet">
                Tipo subasta
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                    {{$tipo}}
                </button>
            </div>
        </div>
        <div class="row-cols-2">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="row pt-3 row-cols pl-3">
                <!--<figure>-->
                <div class="col-md-3">
                    <img src="{{asset($logo)}}" class="rounded-circle my-auto d-inline-flex img-fluid" width="50" alt="">
                </div>
                <div class="col-md-9">
                    <span class="my-auto align text-center">concedido por: <br><strong>{{$razon_social}}</strong></span>

                    <h5 class="my-auto px-2">{{$year}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
