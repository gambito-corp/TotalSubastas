<div class="container">
    <div class="row">
        <div class="col-md col-md-12 mt-5">
            {{--TODO: CREAR COMPONENTE LIVEWIRE PARA PUJA--}}
            @livewire('subastas.live.live.header', ['data'=> $data])
            <div class="row mt-4 justify-content-between">
                {{--TODO: HACER ACCIONES--}}
                @livewire('subastas.live.live.likes', ['data'=> $data])
                {{-- TODO: Vista del Chat--}}
                @livewire('subastas.live.live.mensajes', ['data'=> $data])
                {{--TODO: HACER RANKING--}}
                @livewire('subastas.live.live.ranking', ['data'=> $data])
            </div>
        </div>
    </div>
</div>
