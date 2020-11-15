<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <form action="{{route('admin.address.update', ['id' => $direccion->id])}}" method="Post">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <div class="custom-control col-md-2 col-sm-6 ">
                        <label for="usuario">Usuario *</label>
                        <select class="form-control  @error('usuario') is-invalid @enderror" name="usuario" id="usuario">
                            <option value="{{$direccion->user_id}}" selected>{{$direccion->Usuario->name}}</option>
                            @forelse($usuarios as $user)
                                <option value="{{$user['id']}}">{{$user['name']}}</option>
                            @empty
                                <option>No hay Usuarios Por favor Registra Alguno en la Plataforma</option>
                            @endforelse
                        </select>
                        @error('usuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="custom-control col-md-2 col-sm-6 ">
                        <label for="pais">Pais *</label>
                        <select class="form-control  @error('pais') is-invalid @enderror" name="pais" id="pais" wire:model="parent_id1">
                            <option value="{{$direccion->pais_id}}" selected>{{$direccion->Pais->nombre}}</option>
                            @forelse($paises as $parent)
                                <option value="{{$parent->id}}">{{$parent->nombre}}</option>
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
                        <label for="departamento">Departamento *</label>
                        <select class="form-control  @error('departamento') is-invalid @enderror" name="departamento" id="departamento" wire:model="parent_id2">
                            <option value="{{$direccion->departamento_id}}" selected>{{$direccion->Departamento->nombre}}</option>
                            @forelse($departamentos as $parent)
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
                        <label for="provincia">Provincia *</label>
                        <select class="form-control  @error('provincia') is-invalid @enderror" name="provincia" id="provincia" wire:model="parent_id3">
                            <option value="{{$direccion->provincia_id}}" selected>{{$direccion->Provincia->nombre}}</option>
                            @forelse($provincias as $parent)
                                <option value="{{$parent->id}}">{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Paises Crea una</option>
                            @endforelse
                        </select>

                        @error('provincia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="custom-control col-md-2 col-sm-6 ">
                        <label for="distrito">Distrito *</label>
                        <select class="form-control  @error('distrito') is-invalid @enderror" name="distrito" id="distrito">
                            <option value="{{$direccion->distrito_id}}" selected>{{$direccion->Distrito->nombre}}</option>
                            @forelse($distrito as $parent)
                                <option value="{{$parent->id}}">{{$parent->nombre}}</option>
                            @empty
                                <option>No hay Paises Crea una</option>
                            @endforelse
                        </select>

                        @error('distrito')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="custom-control col-md-4 col-sm-12">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'dir1',
                            'valor'     => $direccion->direccion1,
                            'tag'       => 'Direccion1',
                            'tipo'      => 'text',
                            'place'     => 'texto del holder',
                            'require'   => true,
                            'edit'      => true
                            ])
                    </div>
                </div>

                <div class="form-group row">
                    <div class="custom-control col-md-4 col-sm-12">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'titulo',
                            'valor'     => $direccion->titulo_direccion,
                            'tag'       => 'Titulo de Direccion',
                            'tipo'      => 'text',
                            'place'     => 'Titulo de su direccion ej. Direccion de casa',
                            'require'   => true,
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-4 col-sm-12">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'ref',
                            'valor'     => $direccion->referencia,
                            'tag'       => 'Referencia',
                            'tipo'      => 'text',
                            'place'     => 'Referencia de la Direccion',
                            'edit'      => true
                            ])
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4">{{'Actualizar'}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
