<div class="col-md-6 col-sm-12 no-padding-responsive"  onmouseover="bottom()">
    <h1 class="titulo-online-ts">{{$nombre}}</h1>
    <p class="fecha-fab-online-ts">{{$year}}</p>
    <div class="col-md-9 pd-0 m-0">
        <div class="row row-cols-4">
            <div class="col-12 col-md-2 col-sm-12 col-xs-12 text-light p-0 m-0 text-s_gd-sheet">
                Garantia
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 no-padding-responsive">
                <button
                    class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text m-0 ">
                    $ {{$garantia}}
                </button>
            </div>
            <div class="col-12 col-md-3 col-sm-12 text-light col-xs-12 text-s_gd-sheet offset-md-1">
                Ganador actual
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 no-padding-responsive">
                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text ganador-actual-subasta">
                    {{$ganador}}
                </button>
            </div>
        </div>
        <!--  -->
        <div class="row row-cols-4 mt-2">
            <div class="col-12 col-md-2 col-sm-12 text-light col-xs-12 text-s_gd-sheet">
                Comisión
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 no-padding-responsive">
                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                    {{$comision}} %
                </button>
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 text-light text-s_gd-sheet offset-md-1">
                Tipo subasta
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 no-padding-responsive">
                <button class="btn btn-block btn-outline-dark text-light btn-outline-light_b data_sheet-d_sm-text">
                    {{$tipo}}
                </button>
            </div>
        </div>
        <div class="row-cols-2">
            <div class="col"></div>
        </div>
        
        <div class="row pt-3">
            <!--<figure>-->
            <div class="col-md-3 no-padding-responsive">
                @include('assets.imagen', ['carpeta' => 'empresa', 'id' => $producto->Empresa->id, 'ancho' => '70', ])
            </div>
            <div class="col-md-9 no-padding-responsive">
                <span class="my-auto align text-center">concedido por {{$razon_social}} </span>

                <h5 class="my-auto">{{$year}}</h5>
            </div>
        </div>
        
    </div>
</div>
