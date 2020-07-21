<div class="col col-md-3 mb-4 ">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted"></span>
        <span class="badge badge-secondary badge-pill"></span>
    </h4>
    <div>
        {{--//TODO: Inicio de acordeon--}}
        <div class="accordion md-accordion" id="categorias" role="tablist" aria-multiselectable="true">
            {{-- //TODO: Categorias --}}
            <div class="card side-nav">
                <!-- Card header -->
                <a data-toggle="collapse" data-parent="#categorias" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" class="">
                    <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="headingOne1">

                        <p class="mb-0 card-side-nav_title text-dark ">
                            Categorias
                        </p>
                        <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                    </div>
                </a>
                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                    <div class="card-body ">
                        <div class="col d-flex justify-content-between border-bottom mt-2" wire:click="TipoV('Vehiculo Ligero')">
                            <p class="car-side-nav_bp"> Vehiculo Ligero </p> <span class="car-side-nav_bp-span"> 25 </span>
                        </div>
                        <div class="col d-flex justify-content-between border-bottom mt-2" wire:click="TipoV('Vehiculo Pesado')">
                            <p class="car-side-nav_bp"> Vehiculo Pesado </p> <span class="car-side-nav_bp-span"> 13 </span>
                        </div>
                        <div class="col d-flex justify-content-between  mt-2" wire:click="TipoV('Vehiculo Pesado')">
                            <p class="car-side-nav_bp"> Vehiculo Pesado </p><span class="car-side-nav_bp-span"> 2 </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- //TODO: Tipo De Subasta --}}
            <div class="card side-nav">
                <!-- Card header -->
                <a data-toggle="collapse" data-parent="#tiposubasta" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2" class="">
                    <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="tiposubasta">

                        <p class="mb-0 car-side-nav_title text-dark ">
                            Tipo subasta
                        </p>
                        <i id="angle" class="fas fa-angle-down rotate-icon"></i>
                    </div>
                </a>
                <!-- Card body -->
                <div id="collapseOne2" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#tiposubasta">
                    <div class="card-body ">
                        <div class="col d-flex justify-content-between ">

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Con Reserva" wire:model="tipoR">
                                <label class="form-check-label car-side-nav_bp" for="exampleCheck1">con reserva</label>
                            </div>

                        </div>
                        <div class="col d-flex justify-content-between ">

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Sin Reserva" wire:model="tipoR">
                                <label class="form-check-label car-side-nav_bp" for="exampleCheck1">sin reserva</label>
                            </div>

                        </div>
                        <div class="col d-flex justify-content-between mt-2">

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Compra Directa" wire:model="tipoR">
                                <label class="form-check-label car-side-nav_bp" for="exampleCheck1">compra inmediata</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- //TODO: Precio --}}
            <div class="card side-nav">
                <!-- Card header -->
                <a data-toggle="collapse" data-parent="#precio" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3" class="">
                    <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="precio">

                        <p class="mb-0 car-side-nav_title text-dark ">
                            Precio
                        </p>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </div>
                </a>
                <!-- Card body -->
                <div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#precio">
                    <div class="card-body ">
                        <div class="col-12 d-flex justify-content-between  mt-2">
                            <form class="m-2">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control car-side-nav_bp" placeholder="$ 3000"  wire:model.lazy="precioMin">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control car-side-nav_bp" placeholder="$ 5000" wire:model.lazy="precioMax">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- //TODO: Empresas --}}
            <div class="card side-nav">
                <!-- Card header -->
                <a data-toggle="collapse" data-parent="#empresa" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4" class="">
                    <div class="card-header  car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="empresa">

                        <p class="mb-0 car-side-nav_title text-dark ">
                            Empresa
                        </p>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </div>
                </a>
                <!-- Card body -->
                <div id="collapseOne4" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#precio">
                    <div class="card-body ">
                        <span class="badge {{$picked == true ? 'badge-success' : 'badge-danger'}}">{{$picked == true ? 'Busca Una Empresa' : 'buscando'}}</span>
                        <div class="col d-flex justify-content-between mt-2">
                            <div class="input-group m-2">
                                <div class="input-group ">
                                    <input class="form-control py-2 border-right-0 border" type="text" id="buscar" wire:model="buscar" wire:keydown.enter="asignarPrimero()">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>

                                @error("buscar")

                                <small class="form-text text-danger">{{$message}}</small>

                                @else
                                    @if(count($empresas)>0)

                                        @if(!$picked)
                                            <div class="shadow rounded px-3 pt-3 pb-0 container">
                                                @foreach($empresas as $empresa)
                                                    <div style="cursor: pointer;" class="row sombreado-azul">
                                                        <a wire:click="asignarEmpresa('{{ $empresa->nombre }}')">
                                                            {{ $empresa->nombre }}
                                                        </a>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                            </div>
                                        @endif
                                    @else
                                        <small class="form-text text-muted">Comienza a teclear para que aparezcan los resultados</small>
                                    @endif
                                    @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- //TODO: Ciudad --}}
            <div class="card side-nav">
                <!-- Card header -->
                <a data-toggle="collapse" data-parent="#ciudad" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5" class="">
                    <div class="card-header car-side-nav_header text-dark d-flex justify-content-between collapsed border-0" role="tab" id="ciudad">
                        <p class="mb-0 car-side-nav_title text-dark ">
                            Ciudad
                        </p>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </div>
                </a>
                <!-- Card body -->
                <div id="collapseOne5" class="collapse car-side-nav_bp show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#ciudad">
                    <div class="card-body ">
                        <div class="col d-flex justify-content-between mt-2">
                            <select class="custom-select" wire:model="ciudad">
                                <option selected value="null">Elige una ciudad</option>
                                @foreach($this->select->unique('ciudad') as $dat)
                                    <option value="{{$dat->ciudad}}">{{$dat->ciudad}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- //TODO: Fin del Acordeon --}}
    </div>
    <div class="mr-2  side-nav mt-4 rounded ">
        <!-- <article class="p-side_nav text-light">
          <p class="text-capitalize">mas de
          <h2>500</h2> usuarios <br> conf&iacute;an en nosotros</p>
        </article> -->
        <img class="img-fluid d-md-block radius" src="./assets/img/image-021.png" alt="">
      </div>
</div>
