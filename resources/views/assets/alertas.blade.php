@if (session()->has('message'))
    <div>
        <div class="{{session('alerta')? 'alert alert-'.session('alerta'): ''}}">
            {{ session('message') }}
        </div>
    </div>
@endif
