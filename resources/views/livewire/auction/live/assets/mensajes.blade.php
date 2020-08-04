<div class="col-md-5 order-md-2 p-4 text-light bg-dark scroll" id="scroll" style="height: 400px; border-radius: 10px;" onmouseover="bottom()">
    @isset($mensajes)
        @forelse($mensajes as $value )
            @if ($value['user_id'] == Auth::id())
                <div class="mt-2 alert text-light rounded-pill ancho--220 float-right chat-box-user align-items-end" width="55%" id="{{$loop->last?'foco':''}}">
                    <p class="chat-box-txt">
                        <strong>{{$value['usuario']['name']}}</strong>  ofertó  <strong>$ {{$value['message']}}</strong>
                    </p>
                </div>
                <br>
            @else
                <div class="mt-2 alert alert-light text-dark rounded-pill ancho--220 float-left chat-box-else align-items-end" width="55%" id="{{$loop->last?'foco':''}}">
                    <p class="chat-box-txt">
                        <strong>{{$value['usuario']['name']}}</strong>  ofertó  <strong>$ {{$value['message']}}</strong>
                    </p>
                </div>
                <br>
            @endif
            <br>
        @empty
            <div class="mt-2 alert text-light rounded-pill ancho--220 float-right chat-box-user align-items-end" width="55%">
                <p class="chat-box-txt">
                    <strong>Subasta Por Iniciar</strong>
                </p>
            </div>
            <br>
        @endforelse
    @endisset
</div>

