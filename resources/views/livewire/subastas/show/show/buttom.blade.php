<div>
    <div class="col-lg-12 col-md-12  pd-0 m-0">
        <!--  -->
        <div class="row row-cols-4 ">
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 p-0 m-0 text-s_gd-sheet">
                Garantia
            </div>
            <div class="col-12  col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text m-0">$ {{$Producto->garantia}}</button>
            </div>
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                Ganador actual
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 ">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text ">{{$Producto->Usuario->name}}</button>
            </div>
        </div>
        <!--  -->
        <div class="row row-cols-4 mt-2">
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                comision
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text "> {{$Producto->comision}}
                </button>
            </div>
            <div class="col-12 col-md-3  text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                Tipo subasta
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text"> subasta
                </button>
            </div>
        </div>
        <div class="row-cols-2">
            <div class="col">

            </div>
        </div>
    </div>

    <div class="row mt-5" wire:poll.1000ms="estado">
        <div class="col">
            <button class="btn btn-outline-dark rounded-pill pr-4 pl-4 btn-to_action-bottom precio-tamaño">
                $ {{$Producto->precio}} actual
            </button>
        </div>

        <div class="col" >
            @if($Estado[0] == 'ganador')
                <p class="btn btn-success rounded-pill pr-4 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i> Vas Ganando </p>
            @endif
            @if($Estado[0] == 'online')
                @auth
                    <a class="btn btn-primary rounded-pill pr-4 btn-to_action-bottom text-light" href="{{ route('auctionLiveDetail', ['id' => $Producto->id])}} "><i class="fas fa-eye pr-3 pl-3 "></i> Participar </a>
                @else
                    <a class="btn btn-success rounded-pill pr-4 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
                @endauth
            @endif
            @if($Estado[0] == 'puja')
                @auth
                    <form wire:submit.prevent="pujar">
                        <button class="btn btn-primary rounded-pill pr-4 btn-to_action-bottom text-light"><i class="fas fa-gavel fa-rotate-270 pr-3 pl-3 "></i> Pujar {{$Producto->puja}} $ </button>
                    </form>
                @else
                    <a class="btn btn-success rounded-pill pr-4 btn-to_action-bottom text-light" href="{{ route('login')}} "><i class="fas fa-user pr-3 pl-3 "></i> Logueate </a>
                @endauth
            @endif
            @if($Estado[0] == 'Finalizada')
                <p class="btn btn-warning rounded-pill pr-4 text-light" style="cursor:none" ><i class="fas fa-star  pr-3 pl-3 "></i>La Subasta Finalizo </p>
            @endif
        </div>
    </div>
</div>

