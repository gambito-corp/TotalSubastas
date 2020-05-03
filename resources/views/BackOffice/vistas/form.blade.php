{{ var_dump($clase) }}
<form method="{{$clase['verbo']}}" action="{{route( $clase['ruta'], $clase['modelo'] = $data->id )}}">
    @csrf
    @if ($clase['method'] == 'edit')
        @method('PATCH')
    @else

    @endif
    @if(isset($clase['campos_form']['select']['existe']) && $clase['campos_form']['select']['existe'] == "si")
        @for ($i = 0; $i < $clase['campos_form']['select']['cantidad']; $i++)

            @php
                $value = $clase['data'][$clase['campos_form']['select'][$i]['name']];
            @endphp
            <div class="form-group row">
                <label for="{{ $clase['campos_form']['select'][$i]['name'] }}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['select'][$i]['name'] }}</label>

                <div class="col-md-6">
                    <select name="{{ $clase['campos_form']['select'][$i]['name'] }}" id="{{ $clase['campos_form']['select'][$i]['name'] }}" class="form-control @error($clase['campos_form']['select'][$i]['name']) is-invalid @enderror" required autocomplete="{{ $clase['campos_form']['select'][$i]['name'] }}" autofocus>
                        <option value="{{ isset($value) ? $value : old($clase['campos_form']['select'][$i]['name']) }}">{{ isset($value) ? $value : old($clase['campos_form']['select'][$i]['name']) }}</option>
                        @forelse ($clase['campos_form']['select'][$i]['option'] as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @empty
                            <option value="fake">fake</option>
                        @endforelse
                        @if (Auth::user()->rol == 'admin')
                            <option value="admin">admin</option>
                        @endif
                    </select>
                    @error($clase['campos_form']['select'][$i]['name'])
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endfor
    @else
        @if(isset($clase['campos_form']['select']['existe']) && $clase['campos_form']['select']['existe'] == "si")
            @for ($i = 0; $i < $clase['campos_form']['select']['cantidad']; $i++)
                <div class="form-group row">
                    <label for="{{ $clase['campos_form']['select'][$i]['name'] }}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['select'][$i]['name'] }}</label>
                    <div class="col-md-6">
                        <select name="{{ $clase['campos_form']['select'][$i]['name'] }}" id="{{ $clase['campos_form']['select'][$i]['name'] }}" class="form-control @error($clase['campos_form']['select'][$i]['name']) is-invalid @enderror" required autocomplete="{{ $clase['campos_form']['select'][$i]['name'] }}" autofocus>
                            <option value="null" disabled>--</option>
                            @forelse ($clase['campos_form']['select'][$i]['option'] as $item)

                                @if ($item == 'admin' && Auth::user()->rol != 'admin')
                                    {{-- <option value="{{ $item }}">{{ $item }}</option> --}}
                                @else
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endif
                            @empty
                                <option value="fake">fake</option>
                            @endforelse

                        </select>
                        @error($clase['campos_form']['select'][$i]['name'])
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endfor
        @endif
    @endif
    @if(isset($clase['campos_form']['text']['existe']) && $clase['campos_form']['text']['existe'] == "si" && isset($clase['data']))
        @for ($i = 0; $i < $clase['campos_form']['text']['cantidad']; $i++)
            @php
                $value = $clase['data'][$clase['campos_form']['text'][$i]['name']];
            @endphp
            <div class="form-group row">
                <label for="{{$clase['campos_form']['text'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['text'][$i]['tag'] }}</label>

                <div class="col-md-6">
                    <input
                    id="{{$clase['campos_form']['text'][$i]['name']}}"
                    type="text"
                    class="form-control @error($clase['campos_form']['text'][$i]['name']) is-invalid @enderror"
                    name="{{$clase['campos_form']['text'][$i]['name']}}"
                    value="{{ isset($data) ? $data : old($clase['campos_form']['text'][$i]['name']) }}"
                    required
                    autocomplete="{{$clase['campos_form']['text'][$i]['name']}}"
                    autofocus>

                    @error($clase['campos_form']['text'][$i]['name'])
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endfor
    @else
        @if(isset($clase['campos_form']['text']['existe']) && $clase['campos_form']['text']['existe'] == "si")
            @for ($i = 0; $i < $clase['campos_form']['text']['cantidad']; $i++)
                <div class="form-group row">
                    <label for="{{$clase['campos_form']['text'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['text'][$i]['tag'] }}</label>
                    <div class="col-md-6">
                        <input id="{{$clase['campos_form']['text'][$i]['name']}}" type="text" class="form-control @error($clase['campos_form']['text'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['text'][$i]['name']}}" value="{{ old($clase['campos_form']['text'][$i]['name']) }}" required autocomplete="{{$clase['campos_form']['text'][$i]['name']}}" autofocus>
                        @error($clase['campos_form']['text'][$i]['name'])
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endfor
        @endif
    @endif
    @if(isset($clase['campos_form']['email']['existe']) && $clase['campos_form']['email']['existe'] == "si" && isset($clase['data']))
        @for ($i = 0; $i < $clase['campos_form']['email']['cantidad']; $i++)
            <div class="form-group row">
                <label for="{{$clase['campos_form']['email'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['email'][$i]['tag'] }}</label>

                <div class="col-md-6">
                    <input id="{{$clase['campos_form']['email'][$i]['name']}}" type="email" class="form-control @error($clase['campos_form']['email'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['email'][$i]['name']}}" value="{{ isset($clase['campos_form']['email'][$i]['name']) ? $clase['data'][$clase['campos_form']['email'][$i]['name']] : old($clase['campos_form']['email'][$i]['name']) }}" required autocomplete="{{$clase['campos_form']['email'][$i]['name']}}" autofocus>

                    @error($clase['campos_form']['email'][$i]['name'])
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endfor
    @else
        @if(isset($clase['campos_form']['email']['existe']) && $clase['campos_form']['email']['existe'] == "si")
            @for ($i = 0; $i < $clase['campos_form']['email']['cantidad']; $i++)
                <div class="form-group row">
                    <label for="{{$clase['campos_form']['email'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['email'][$i]['tag'] }}</label>

                    <div class="col-md-6">
                        <input id="{{$clase['campos_form']['email'][$i]['name']}}" type="email" class="form-control @error($clase['campos_form']['email'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['email'][$i]['name']}}" value="{{  old($clase['campos_form']['email'][$i]['name']) }}" required autocomplete="{{$clase['campos_form']['email'][$i]['name']}}" autofocus>

                        @error($clase['campos_form']['email'][$i]['name'])
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endfor
        @endif
    @endif
    @if(isset($clase['campos_form']['file']['existe']) && $clase['campos_form']['file']['existe'] == "si")
        @for ($i = 0; $i < $clase['campos_form']['file']['cantidad']; $i++)
            <div class="form-group row">
                <label for="{{$clase['campos_form']['file'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{ $clase['campos_form']['file'][$i]['tag'] }}</label>

                <div class="col-md-6">
                    <input id="{{$clase['campos_form']['file'][$i]['name']}}" type="file" class="form-control @error($clase['campos_form']['file'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['file'][$i]['name']}}" {{ $clase['campos_form']['file'][$i]['requerido'] }} autofocus>

                    @error($clase['campos_form']['file'][$i]['name'])
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @isset($clase['data'][$clase['campos_form']['file'][$i]['tag']])
                    <img src="{{route($clase['campos_form']['file'][$i]['ruta'], ['filename' => $clase['data']['imagen']])}}" alt="" width="200" height="200" class="img-fluid rounded mx-auto d-block">
                @else
                    <img src="{{asset('img/user.png')}}" alt="" width="200" height="200" class="img-fluid rounded mx-auto d-block" alt="fallo">
                @endisset
            </div>
        @endfor
    @endif
    @if(isset($clase['campos_form']['password']['existe']) && $clase['campos_form']['password']['existe'] == "si")
        @for ($i = 0; $i < $clase['campos_form']['password']['cantidad']; $i++)
            <div class="form-group row">
                <label for="{{$clase['campos_form']['password'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{$clase['campos_form']['password'][$i]['tag']}}</label>

                <div class="col-md-6">
                    <input id="{{$clase['campos_form']['password'][$i]['name']}}" type="password" class="form-control @error($clase['campos_form']['password'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['password'][$i]['name']}}"  autocomplete="nuevo-{{$clase['campos_form']['password'][$i]['name']}}">

                    @error($clase['campos_form']['password'][$i]['name'])
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endfor
    @endif
    @if(isset($clase['campos_form']['textarea']['existe']) && $clase['campos_form']['textarea']['existe'] == "si")
    @for ($i = 0; $i < $clase['campos_form']['textarea']['cantidad']; $i++)
        <div class="form-group row">
            <label for="{{$clase['campos_form']['textarea'][$i]['name']}}" class="col-md-4 col-form-label text-md-right text-capitalize">{{$clase['campos_form']['textarea'][$i]['tag']}}</label>

            <div class="col-md-6">
                <textarea id="{{$clase['campos_form']['textarea'][$i]['name']}}"  class="form-control @error($clase['campos_form']['textarea'][$i]['name']) is-invalid @enderror" name="{{$clase['campos_form']['textarea'][$i]['name']}}"  autocomplete="nuevo-{{$clase['campos_form']['textarea'][$i]['name']}}"></textarea>

                @error($clase['campos_form']['textarea'][$i]['name'])
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    @endfor
    @endif
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ $clase['boton'] }}
            </button>
        </div>
    </div>
</form>


