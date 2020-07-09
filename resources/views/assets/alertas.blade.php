@if (session()->has('message'))
<div>
    <div class="alert {{session('alerta')? session('alerta'): ''}}">
        {{ session('message') }}
    </div>
</div>
@endif
