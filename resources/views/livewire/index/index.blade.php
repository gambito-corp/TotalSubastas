<div>
    <div class="row">
        {{-- //TODO: Lista aside de filtro--}}
        @livewire('index.busqueda')
        <div class="col-md-9 order-md-2 mt-3">
            <div class="row">
                @if(count($empresas)>0)
                    {{-- //TODO: Resultados de la busqueda--}}
                    @livewire('index.barra', ['empresas' => $empresas])
                    {{-- //TODO: Caja de Resultados--}}
                        @livewire('index.resultados', ['empresas' => $empresas])
                @endif
            </div>
        </div>
    </div>

</div>
