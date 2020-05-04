<form method="{{$clase['verbo']}}" action="{{route( $clase['ruta'], $clase['modelo'] = $data->id )}}">
    @csrf
    <input type="hidden" name="_ruta" value="{{ $clase['ruta'] }}">
    @if ($clase['method'] == 'edit')
        @method('PATCH')
    @elseif($clase['method'] == 'delete')
        @method('PUT')
    @elseif($clase['method'] == 'destroy')
        @method('DELETE')
    @else
        @method('POST')
    @endif

    @isset($clase['campos_form']['input']['existe'])
        @if ($clase['campos_form']['input']['existe'])
        <div class="form-group row">
            @for ($i = 0; $i < $clase['campos_form']['input']['cantidad']; $i++)
            @php $form = $clase['campos_form']['input'][$i];@endphp
            @if ($form['attr']['tipe'] == 'hidden')
            @else
                <div class="{{ $form['columnas'] }}">
            @endif

                @if ($form['attr']['tipe'] == 'hidden' || $form['attr']['tipe'] == 'submit')
                @else
                    <label
                            for="{{$form['attr']['name'] }}"
                            class="col-md-4 col-form-label text-md-right text-capitalize">
                                {{ $form['nombre'] }}
                        </label>
                    @endif

                @if ($form['tag'] == 'input')
                    <{{ $form['tag'] }}
                    {{-- CAMPOS OBLIGATORIOS PARA TODOS LOS INPUT --}}
                        type='{{ $form['attr']['tipe'] }}'
                        id="{{ $form['attr']['name'] }}"
                        name ="{{ $form['attr']['name'] }}"
                        {{-- CAMPOS CONDICIONALES --}}
                        @if ($form['attr']['tipe'] == 'submit')
                            class="form-control {{ $form['attr']['tipe']}} btn btn-outline-success"
                            value="Enviar"
                        @elseif ($form['attr']['tipe'] == 'reset')
                            class="form-control {{ $form['attr']['tipe']}} btn btn-outline-danger"
                            value="Resetear"
                        @elseif ($form['attr']['tipe'] == 'button')
                            class="form-control {{ $form['attr']['tipe']}} btn btn-outline-info"
                            value="Hazme Click"
                        @else
                            class="form-control {{ $form['attr']['tipe']}}  @error($form['attr']['name']) is-invalid @enderror"
                            {{-- value="{{ empty(!$data2) ? 'hola' : old($form['attr']['name']) }}" --}}
                            value ="{{ old($form['attr']['name'], $data[$form['attr']['name']]) }}"
                        @endif
                    {{-- CAMPOS OPCIONALES --}}
                    @if ($form['attr']['tipe'] == 'button')
                        onclick="{!! $form['attr']['onclick'] !!}"
                    @endif
                    >
                @elseif($form['tag'] == 'textarea')
                    <textarea
                    name ="{{ $form['attr']['name'] }}"
                    id ="{{ $form['attr']['name'] }}"
                    class ="form-control {{ $form['attr']['name'] }} @error($form['attr']['name']) is-invalid @enderror"
                    col ="{{ $form['attr']['tipe'] }}"
                    rows ="{{ $form['attr']['tipe'] }}"
                    >{!! old($form['attr']['name'], $data[$form['attr']['name']]) !!}</textarea>


                @endif


                {{-- //errores --}}
                @error($form['attr']['name'])
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                @if ($form['attr']['tipe'] == 'hidden')
                @else
                </div>
                @endif
            @endfor
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        @else
            no existe el input
        @endif
    @endisset

        {{-- @for ($i = 0; $i < $clase['campos_form']['hidden']['cantidad']; $i++)
            <div class="form-group row">
                <div class="col-md-6">
                    <input
                    id="{{$clase['campos_form']['hidden'][$i]['name']}}"
                    type="hidden"
                    class="form-control"
                    name="{{$clase['campos_form']['hidden'][$i]['name']}}"
                    value="{{ empty(!$data) ? $data : $clase['campos_form']['hidden'][$i]['name'] }}"
                    required
                    autocomplete="{{$clase['campos_form']['hidden'][$i]['name']}}"
                    autofocus>

        @endfor --}}


</form>
