<div class="form-group row">
    <div class="custom-control col-md-4">
        <label for="empresa_id">Empresas</label>
        <select class="form-control  @error('empresa_id') is-invalid @enderror" name="empresa_id" id="empresa_id" wire:model="empresa">
            @forelse($empresas as $emp)
                <option value="{{$emp->id}}" {{$emp->id == $actual->empresa_id? 'selected':''}}>{{$emp->nombre}}</option>
            @empty
                <option>No hay Empresas Crea una</option>
            @endforelse
        </select>

        @error('empresa_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="custom-control col-md-4">
        <label for="lote_id">Lotes</label>
        <select class="form-control  @error('lote_id') is-invalid @enderror" name="lote_id" id="lote_id" wire:model="lote">
            @forelse($lotes as $lot)
                <option value="{{$lot->id}}" {{$lot->id == $actual->lote_id? 'selected':''}}>{{$lot->nombre}}</option>
            @empty
                <option>No hay Empresas Crea una</option>
            @endforelse
        </select>

        @error('lote_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="custom-control col-md-4">
        <label for="producto_id">Lotes</label>
        <select class="form-control  @error('producto_id') is-invalid @enderror" name="producto_id" id="producto_id">
            @forelse($productos as $prod)
                <option value="{{$prod->id}}" {{$prod->id == $actual->producto_id? 'selected':''}}>{{$prod->nombre}}</option>
            @empty
                <option>No hay Empresas Crea una</option>
            @endforelse
        </select>

        @error('producto_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
