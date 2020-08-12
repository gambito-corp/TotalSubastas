@isset($admin)
    <img src="{{route('admin.'.$carpeta.'.getImagen', ['id' => \App\Helpers\Gambito::hash($id)])}}" class="{{isset($class)? $class:''}}" alt="" width="{{$ancho}}">
@else
    <img src="{{route($carpeta.'.getImagen', ['id' => \App\Helpers\Gambito::hash($id)])}}" class="{{isset($class)? $class:''}}" alt="" width="{{$ancho}}">
@endisset
