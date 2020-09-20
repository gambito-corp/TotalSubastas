<x-email titulo="Usuario Registrado" submit="Click Para Ofertar" :ruta="$ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="">
    <h2 >Se Registro tu Participacion {{$user->name}}!</h2>
    <p >Felicidades el Auto {{$producto->nombre}} Puede ser tuyo</p>

    <x-slot name="recordatorio">
        <div style="display:inline-block; width:100%">
            <div style="width:20%; float:left;">
                <img src="{{$imagen}}" width="184" style="">
            </div>
            <div style="width:50%; margin:0 auto; float:right;">
                <p style="display:block">
                    {{$producto->nombre}}
                </p>
                <p style="display:block">
                    Ofrecido Por: {{$producto->Empresa->nombre}}
                </p>
                <p style="display:block">
                    Garantia Retenida ${{$producto->garantia}}
                </p>
                <p style="display:block">
                    Tipo de Subasta: {{$producto->tipo_subasta}}
                </p>
            </div>
        </div>
    </x-slot>
</x-email>
