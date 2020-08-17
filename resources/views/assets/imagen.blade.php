@isset($admin)
    <img
        src="{{route('admin.'.$carpeta.'.getImagen'.(($carpeta == 'persona')?$dni:'').'', ['id' => \App\Helpers\Gambito::hash($id)])}}"
        class="{{isset($class)? $class:''}}"
        alt="{{isset($alt)? $alt:''}}"
        width="{{isset($ancho)?$ancho:''}}"
        height="{{isset($alto)? $alto:''}}"
        data-target="{{isset($data_target)?$data_target:''}}"
        data-slide-to="{{isset($data_slide_to)?$data_slide_to:''}}"
    >
@else
    <img
        src="{{route($carpeta.'.getImagen', ['id' => \App\Helpers\Gambito::hash($id)])}}"
        class="{{isset($class)? $class:''}}"
        alt="{{isset($alt)? $alt:''}}"
        width="{{isset($ancho)?$ancho:''}}"
        height="{{isset($alto)? $alto:''}}"
        data-target="{{isset($data_target)?$data_target:''}}"
        data-slide-to="{{isset($data_slide_to)?$data_slide_to:''}}"
    >
@endisset
