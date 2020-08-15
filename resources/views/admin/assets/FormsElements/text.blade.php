<label for="{{$nombre}}">{{$tag}} {{isset($require) && $require? '*':''}}</label>
<input  type="{{$tipo}}"
        name="{{$nombre}}"
        @isset($live)
        wire:model="{{$nombre}}"
        @endisset
        class="form-control @error($nombre) is-invalid @enderror"
        @isset($place)
        placeholder="{{$place}}"
        @endisset
        @isset($edit)
        value="{{$valor}}"
        @else
        value="{{old($nombre)}}"
        @endisset

        {{isset($multi) && $multi? 'multiple':''}}
        {{isset($require) && $require? 'require':''}}
>
@error($nombre)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
