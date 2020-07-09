<div class="container">
    <div class="row">
        <div class="col-md-3 mt-3 pl--1">
            @livewire('index.busqueda')
        </div>
        <div class="col-md-9 mt-3 pl--2">
            <div class="row">
                @if (count($empresas)>0)
                    @livewire('index.barra', ['empresas' => $empresas])

                    @livewire('index.resultados', ['empresas' => $empresas])
                @endif
            </div>
        </div> 
    </div>







    {{-- <div class="row">

        @livewire('index.busqueda')
        <div class="col-md-9 order-md-2 mt-3">
            <div class="row">
                @if(count($empresas)>0)

                    @livewire('index.barra', ['empresas' => $empresas])

                    @livewire('index.resultados', ['empresas' => $empresas])
                @endif
            </div>
        </div>
    </div>  --}}
</div>
