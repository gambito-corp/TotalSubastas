<div class="row">
    <div class="custom-control col-md-4 col-sm-6 ">
        <label for="pais" class="font-weight-bold text-dark">Pais *</label>
        <select class="form-control  @error('pais') is-invalid @enderror" name="pais" id="pais" wire:model="pais">
            <option value="0">Selecciona un pais</option>
                @forelse($pais as $parent)
                    <option value="{{$parent->id}}" {{old('pais') == $parent->id?'selected':''}}>{{$parent->nombre}}</option>
                @empty
                    <option>No hay Paises Crea una</option>
                @endforelse
        </select>

        @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="custom-control col-md-2 col-sm-6 ">
        <label for="departamento" class="font-weight-bold text-dark">Departamento*</label>
            <select class="form-control  @error('departamento') is-invalid @enderror" name="departamento" id="departamento" wire:model="departamento">
                @forelse($departamento as $parent)
                    <option value="{{$parent->id}}">{{$parent->nombre}}</option>
                @empty
                    <option>No hay Paises Crea una</option>
                @endforelse
            </select>



        @error('departamento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="custom-control col-md-2 col-sm-6 ">
        <label for="provincia" class="font-weight-bold text-dark">Provincia *</label>
        <select class="form-control  @error('provincia') is-invalid @enderror" name="provincia" id="provincia" wire:model="provincia">
            <option value="0" selected>Selecciona una marca para el modelo</option>
{{--            @forelse($provincias as $parent)--}}
{{--                <option value="{{$parent->id}}">{{$parent->nombre}}</option>--}}
{{--            @empty--}}
{{--                <option>No hay Paises Crea una</option>--}}
{{--            @endforelse--}}
        </select>

        @error('provincia')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="custom-control col-md-2 col-sm-6 ">
        <label for="distrito" class="font-weight-bold text-dark">Distrito *</label>
        <select class="form-control  @error('distrito') is-invalid @enderror" name="distrito" id="distrito" wire:model="distrito">
            <option value="0" selected>Selecciona una marca para el modelo</option>
{{--            @forelse($distrito as $parent)--}}
{{--                <option value="{{$parent->id}}">{{$parent->nombre}}</option>--}}
{{--            @empty--}}
{{--                <option>No hay Paises Crea una</option>--}}
{{--            @endforelse--}}
        </select>

        @error('distrito')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group col-md-2">
        <label for="tipo_via" class="font-weight-bold text-dark">Tipo de Via</label>
        <select class="form-control" name="tipo_via" id="">
            <option value="Avenida">Avenida</option>
            <option value="Jiron">Jiron</option>
            <option value="Calle">Calle</option>
            <option value="Pasaje">Pasaje</option>
            <option value="Alameda">Alameda</option>
            <option value="Malecon">Malecon</option>
            <option value="Ovalo">Ovalo</option>
            <option value="Parque">Parque</option>
            <option value="Plaza">Plaza</option>
            <option value="Carretera">Carretera</option>
        </select>
    </div>
</div>
