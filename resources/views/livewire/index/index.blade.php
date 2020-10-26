<div class="row row-width rounded pb-4 width100-responsive">

    @livewire('index.busqueda', ['empresas' => $empresas])

    @if (count($empresas)>0)

        @livewire('index.resultados', ['empresas' => $empresas])
    @endif
</div>

