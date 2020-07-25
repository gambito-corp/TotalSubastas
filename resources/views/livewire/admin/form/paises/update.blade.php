<div>
    <form action="{{route('admin.pais.update', ['id'=> $pais->id])}}" method="Post">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="custom-control">
                        <label for="pais">Pais</label>
                        <select class="form-control  @error('pais') is-invalid @enderror" name="pais" wire:model="parent_id1">
                            <option value="0">Selecciona una marca para el modelo</option>
                            @forelse($paises as $parent)
                                <option value="{{$parent->id}}" {{$pais->parent_id == $parent->id? 'selected':old('pais')}}>{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Marcas Crea una</option>
                            @endforelse
                        </select>
                        @error('pais')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <div class="custom-control">
                        <label for="departamento">Departamento</label>
                        <select class="form-control  @error('departamento') is-invalid @enderror" name="departamento" id="departamento" wire:model="parent_id2">
                            <option value="0" selected>Selecciona una marca para el modelo</option>
                            @forelse($departamentos as $parent)
                                <option value="{{$parent->id}}" {{$pais->parent_id == $parent->id? 'selected':old('departamento')}}>{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Marcas Crea una</option>
                            @endforelse
                        </select>

                        @error('departamento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <label for="provincia">Provincia</label>
                        <select class="form-control  @error('provincia') is-invalid @enderror" name="provincia" id="provincia">
                            <option value="0" selected>Selecciona una marca para el modelo</option>
                            @forelse($provincias as $parent)
                                <option value="{{$parent->id}}" {{$pais->parent_id == $parent->id? 'selected':old('provincia')}}>{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Marcas Crea una</option>
                            @endforelse
                        </select>

                        @error('provincia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" wire:model="nombre" class="form-control  @error('nombre') is-invalid @enderror" placeholder="Nombre del Pais/Modelo" value="{{old('nombre')}}" required autofocus aria-label="Nombre Del Pais/Modelo" aria-describedby="basic-addon1">
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <label for="descripcion">Descripcion</label>
                        <select class="form-control  @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" wire:model="descripcion">
                            <option value="Pais">Pais</option>
                            <option value="Departamento">Departamento</option>
                            <option value="Provincia">Provincia</option>
                            <option value="Distrito">Distrito</option>
                        </select>

                        @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <label for="codigo">Codigo</label>
                        <input type="text" name="codigo" wire:model="codigo" class="form-control  @error('codigo') is-invalid @enderror" placeholder="Codigo del Pais/Modelo" value="{{old('codigo')}}" required autofocus aria-label="Codigo Del Pais/Modelo" aria-describedby="basic-addon1">
                        @error('codigo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($pais->id) ? 'Editar':'Crear' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
