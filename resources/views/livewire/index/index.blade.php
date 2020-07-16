<div class="row rounded pb-4">
    @livewire('index.busqueda')
    @if (count($empresas)>0)
        @livewire('index.resultados', ['empresas' => $empresas])
    @endif
</div>

