<div class="componentInput">
    <label for="{{$nombre}}" class="font-weight-semibold text-dark">{{$label}} {{$attributes['required']?'*':''}}</label>

    <input {{$attributes->merge(['type'=>''])}}
           name="{{$nombre}}"
           class="form-control @error($nombre) is-invalid @enderror"
           value="{{old($nombre)?old($nombre):$valor}}"
           id="{{$nombre}}1">

    <p class="text-center hide" role="alert" >
        <strong >{{$ayuda}}</strong>
    </p>
    @error($nombre)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
