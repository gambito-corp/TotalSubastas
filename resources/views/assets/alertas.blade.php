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
        sleep(5);
        return redirect()->route('index');
    @endphp
@endisset
