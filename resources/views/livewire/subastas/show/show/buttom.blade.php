<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="col-lg-12 col-md-12  pd-0 m-0">
        <!--  -->
        <div class="row row-cols-4 ">
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 p-0 m-0 text-s_gd-sheet">
                Garantia
            </div>
            <div class="col-12  col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text m-0">$ {{$producto->garantia}}</button>
            </div>
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                Ganador actual
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12 ">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text ">{{$producto->Usuario->name}}</button>
            </div>
        </div>
        <!--  -->
        <div class="row row-cols-4 mt-2">
            <div class="col-12 col-md-3 text-center col-sm-12 col-xs-12 text-s_gd-sheet">
                comision
            </div>
            <div class="col-12 col-md-3 col-sm-12 col-xs-12">
                <button class="btn btn-block btn-outline-dark btn-outline-dark_b data_sheet-d_sm-text "> {{$producto->comision}}
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
                $ {{$producto->precio}} actual
            </button>
        </div>

        <div class="col" >
            @include('livewire.subastas.includes.button', ['producto', $producto])
        </div>
    </div>
    <div class="row" style="margin-left: 30px;">
        <input type="checkbox" class="form-check-input" id="" wire:model="tyc">
        <label class="form-check-label" for="">Acepto terminos y condiciones</label>
    </div>

</div>

