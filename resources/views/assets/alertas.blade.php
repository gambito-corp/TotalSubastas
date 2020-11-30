@if (session()->has('message'))
    @isset($message)
        @dump($message)
    @endisset
    <div>
        <div class="{{session('alerta')? 'alert alert-'.session('alerta'): ''}}">
            {{ session('message') }}
        </div>
    </div>
@endif
