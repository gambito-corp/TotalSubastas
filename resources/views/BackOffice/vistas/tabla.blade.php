
@isset($clase)
    <table id="tabla" class="table tablebordered table-hover container-fluid">
        <thead>
            <tr>
                {{-- bucle para cargar las columnas de la tabla --}}
                @for ($i = 0; $i < $clase['campos']; $i++)
                    <th>{{ $clase['tabla'][$i] }}</th>
                @endfor
                {{-- fin del bucle For --}}
            </tr>
        </thead>
        <tbody>
            {{-- bucle para cargar las filas de la tabla --}}
            @forelse ($data as $dat)
                <tr>
                    {{-- bucle para cargar las columnas de la tabla --}}
                    @for ($i = 0; $i < $clase['campos']; $i++)
                        <td>
                            @isset($dat[$clase['bd'][$i]]){{-- Pregunto si existe y si es la descripcion o contenido --}}
                                @if ($clase['bd'][$i] == 'contenido' || $clase['bd'][$i] == 'descripcion')
                                    @if (!empty($dat[$clase['bd'][$i]]))
                                        @if (strlen($dat[$clase['bd'][$i]]) >= 40)
                                            {!! substr($dat[$clase['bd'][$i]], 0, 40).'...<br> <a href="#" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-success_'.'1'.'">Leer Mas...</a>' !!}
                                        @else
                                            {!! $dat[$clase['bd'][$i]] !!}
                                        @endif
                                    @else
                                        {{ 'No Existe Descripcion' }}
                                    @endif
                                    {{-- Si no es Descripciuon ni contenido reviso si es imagen o avatar --}}
                                @elseif($clase['bd'][$i] == 'imagen' || $clase['bd'][$i] == 'avatar')
                                    @if (isset($dat[$clase['bd'][$i]]))
                                        <img src="{{route('user.imagen',['filename' => $dat[$clase['bd'][$i]]])}}" alt="" width="50" height="50">
                                    @else
                                        <img src="{{asset('img/user.png')}}" alt="" width="50" height="50">
                                    @endif
                                @elseif($clase['bd'][$i] == 'created_at')
                                    @if ($user->rol->nombre == 'Superadministrador' || $user->rol->nombre == 'Administrador')
                                        @if ($clase['papelera'] == 'no')
                                            @isset($clase['contacto'])
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-warning_{{$dat[$clase['bd'][0]]}}">
                                                    Dar de Baja {{ $clase['singular'] }}
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-info_{{$dat[$clase['bd'][0]]}}">
                                                    Actualizar {{ $clase['singular'] }}
                                                </button>
                                                @if ($user->id != $dat[$clase['bd'][0]])
                                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-warning_{{$dat[$clase['bd'][0]]}}">
                                                        Dar de Baja {{ $clase['singular'] }}
                                                    </button>
                                                @endif
                                            @endisset
                                        @else

                                            @if ($user->id = $dat[$clase['bd'][0]])
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-info_{{$dat[$clase['bd'][0]]}}">
                                                    Restaurar {{ $clase['singular'] }}
                                                </button>
                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-danger_{{$dat[$clase['bd'][0]]}}">
                                                    Eliminar {{ $clase['singular'] }} Definitivamente
                                                </button>
                                            @endif
                                        @endif
                                        @if($clase['controlador'] == 'Roles')
                                                {{-- Ver Perfil de objeto y personificacion --}}
                                        <a href="{{ route($clase['ver'],[$clase['modelo']=>$dat[$clase['bd'][0]]]) }}" class="btn btn-outline-primary">
                                            Ver {{ $clase['singular'] }}
                                        </a>
                                        @endif
                                    @else
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-permiso{{$dat[$clase['bd'][0]]}}">
                                            Actualizar {{ $clase['singular'] }}
                                        </button>

                                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-permiso{{$dat[$clase['bd'][0]]}}">
                                            Dar de Baja {{ $clase['singular'] }}
                                        </button>
                                    @endif
                                @else
                                    {{ $dat[$clase['bd'][$i]] }}
                                @endif
                            @endisset
                        </td>
                    @endfor{{-- fin del bucle for --}}
                </tr>
                {{-- Espacio de modales --}}
                {{-- modal leer mas --}}



                <div class="modal fade" id="modal-success_{{ 1 }}">
                    <div class="modal-dialog">
                        <div class="modal-content bg-success">
                            <div class="modal-header">
                                <h4 class="modal-title">Descripcion del {{ $clase['singular'] .' '. $dat['campo_titulo'] }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            <p>{!! $dat[$clase['leer mas']] !!}</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
                @if ($clase['papelera'] == 'no')
                    {{-- modal Permiso Denegado --}}
                    <div class="modal fade" id="modal-permiso{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h4 class="modal-title"> Permiso Denegado</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    No Tiene Permiso Para Modificar o Borrar Este  {{ $clase['singular'] }} ({{ $dat['campo titulo'] }}), Porfavor Contacte Con el Administrador del Sistema.
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal actualizar --}}
                    <div class="modal fade" id="modal-info_{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-info">
                                <div class="modal-header">
                                    <h4 class="modal-title">Info Modal {{-- $data->name.''.$data->surname --}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>{{ var_dump($clase['editar']) }} Deseas Actualizar al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</p>




                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>

                                    <a href="{{ route($clase['editar'],[$clase['modelo']=>$dat[$clase['bd'][0]]]) }}" class="btn btn-outline-light">Actualizar {{ $clase['singular'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal dar de baja --}}
                    <div class="modal fade" id="modal-warning_{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-warning">
                                <div class="modal-header">
                                    <h4 class="modal-title">Dar de Baja al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Si das de baja al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}} este no podra acceder a la intranet hasta que decidas volver a darlo de alta en la plataforma</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>

                                    <form action="{{ route($clase['borrar'],[$clase['modelo'] => $dat[$clase['bd'][0]]]) }}" method="post">
                                        @csrf
                                        <input
                                        type='submit'
                                        class="btn btn-outline-light">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- modal Restaurar --}}
                    <div class="modal fade" id="modal-info_{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-info">
                                <div class="modal-header">
                                    <h4 class="modal-title">Info Modal {{-- $data->name.''.$data->surname --}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Deseas Restaurar al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                    {{-- <a href="{{ route('rol.restore', ['rol' => 11]) }}" class="btn btn-outline-light">Restaurar</a> --}}
                                    <form action="{{ route($clase['restaurar'],[$clase['modelo'] => $dat[$clase['bd'][0]]]) }}" method="post">
                                        @csrf @method('PUT')
                                        <input
                                        type='submit'
                                        class="btn btn-outline-light">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal Eliminar --}}
                    <div class="modal fade" id="modal-danger_{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h4 class="modal-title">Eliminar {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Esto eliminara al {{ $clase['singular'] }} de forma irreversible una vez presionado y confirmado el boton eliminar no hay marcha atras <br> desear eliminar al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-danger-confirmacion_{{$dat[$clase['bd'][0]]}}">
                                        Eliminar {{ $clase['singular'] }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Confirmacion de eliminar --}}
                    <div class="modal fade" id="modal-danger-confirmacion_{{$dat[$clase['bd'][0]]}}">
                        <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmacion de Eliminar {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>100% Seguro de eliminar al {{ $clase['singular'] }} {{-- $data->name.''.$data->surname --}}</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                    {{-- <a href="{{ route($clase['eliminar'],[$clase['modelo']=>$dat[$clase['bd'][0]]]) }}" class="btn btn-outline-light">Eliminar</a> --}}
                                    <form action="{{ route($clase['eliminar'],[$clase['modelo'] => $dat[$clase['bd'][0]]]) }}" method="post">
                                        @csrf @method('DELETE')
                                        <input
                                        type='submit'
                                        class="btn btn-outline-light">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            {{-- fin del espacio de los modales --}}
            @empty
            <tr>
                No hay Archivos ni Datos de este Tipo
            </tr>
            @endforelse
        </tbody>
    </table>
@endisset
