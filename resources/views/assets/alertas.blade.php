@if (session()->has('message'))
    <div>
        <div class="{{session('alerta')? 'alert alert-'.session('alerta'): ''}}">
            {{ session('message') }}
        </div>
    </div>
@endif
@isset($message)
    <div>
        <div class="{{$alerta? 'alert alert-'.$alerta: ''}}">
            {{ $message }}
        </div>
    </div>
    @php
        header("Location: http://www.totalsubastas.com");
    @endphp
@endisset
