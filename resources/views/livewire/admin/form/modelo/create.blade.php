<div class="form-group row">
    <div class="custom-control col-md-6">
        <label for="marca_id">Marcas</label>
        <select class="form-control  @error('marca_id') is-invalid @enderror" name="marca_id" id="marca_id" wire:model="parent_id">
            @forelse($marcas as $data)
                <option value="{{$data->id}}">{{$data->nombre}}</option>
            @empty
                <option>No hay Empresas Crea una</option>
            @endforelse
        </select>

        @error('marca_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="custom-control col-md-6">
        <label for="modelo_id">Modelos</label>
        <select class="form-control  @error('modelo_id') is-invalid @enderror" name="modelo_id" id="modelo_id" wire:model="modelos">
            @forelse($modelos as $data)
                <option value="{{$data->id}}">{{$data->nombre}}</option>
            @empty
                <option>No hay Empresas Crea una</option>
            @endforelse
        </select>

        @error('modelo_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
