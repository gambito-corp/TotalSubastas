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

    <div class="row mt-5">
        <div class="col">
            <button class="btn btn-outline-dark rounded-pill pr-4 pl-4 btn-to_action-bottom precio-tamaño" wire:poll.1000ms="estado">
                $ {{$producto->precio}} actual
            </button>
        </div>

        <div class="col" >
            @include('livewire.subastas.includes.button', ['producto'=> $producto, 'tyc' => $tyc])
        </div>
    </div>
    <div class="row" style="margin-left: 30px;">
        @auth
            @if($this->participacion == false)
                <input type="checkbox" class="form-check-input  @error('tyc') is-invalid @enderror" wire:model="tyc" {{$tyc? 'checked':''}}>
                <label class="form-check-label" for="">Acepto <a href="{{route('terminos')}}">terminos y condiciones</a></label>
            @else
                <label class="form-check-label" for="">Ya Acepte Los <a href="{{route('terminos')}}">Terminos y Condiciones</a></label>
            @endif
            @error('tyc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        @endauth
    </div>
</div>

