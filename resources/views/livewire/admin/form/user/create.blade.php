<div>
    <form action="{{route('admin.user.store')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="custom-control">
                        <label for="rol">Rol</label>
                        <select class="form-control  @error('rol') is-invalid @enderror" name="rol" id="rol" wire:model.lazy="rolId">
                            <option value="0" selected>Selecciona una marca para el modelo</option>
                            @forelse($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                            @empty
                                <option>No hay Paises Crea una</option>
                            @endforelse
                        </select>

                        @error('rol')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control">
                        <label for="name">Nombre</label>
                        <input type="text" name="name"  class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}" required wire:model.lazy="nombre">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control">
                        <label for="email">Email</label>
                        <input type="email" name="email"  class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" required wire:model.lazy="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control">
                        <label for="password">Password</label>
                        <input type="password" name="password"  class="form-control  @error('password') is-invalid @enderror" value="{{old('password')}}" required wire:model.lazy="password">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar"  class="form-control-file  @error('nombre') is-invalid @enderror" accept="image/png, image/jpeg" wire:model.lazy="avatar">
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{'Crear'}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
