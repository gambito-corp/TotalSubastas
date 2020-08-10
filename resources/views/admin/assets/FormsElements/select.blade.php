<label for="distrito">Distrito</label>
<select class="form-control  @error('distrito') is-invalid @enderror"
        name="distrito"
        id="distrito">


    <option
        value="0"
        selected>
        Selecciona una marca para el modelo
    </option>
    @forelse($data as $dat)
        <option value="{{$dat->id}}">{{$dat->}}</option>
    @empty
        <option>No hay Paises Crea una</option>
    @endforelse
</select>
