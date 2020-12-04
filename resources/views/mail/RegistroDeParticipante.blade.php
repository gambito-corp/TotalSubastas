<x-email titulo="Usuario Registrado" submit="Click Para Ofertar" :ruta="$ruta" :metodo="$metodo">
    <div class="container-mensaje-participacion" style="margin-left: -25px;margin-right: -25px;background: #242b3d;padding: padding-left: 24px;
    padding-right: 24px;padding-top: 14px;padding-bottom: 64px;">
        <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="" style="padding-top: 16px;">
        <h2 class="titulo-registro-participacion">Se Registro tu Participacion {{$user->name}}!</h2>
        <p class="texto-registro-parti">Felicidades el Auto {{$producto->nombre}} Puede ser tuyo</p>
        
        
    </div>
    

    <x-slot name="recordatorio">
        <div style="display:inline-block; width:100%">
            <div style="width:20%; float:left; margin-left: 15%">
                <img src="{{$imagen}}" width="184" style="">
            </div>
            <div style="width:50%; margin:0 auto; float:right;">
                <p style="display:block; margin-bottom: 4px; font-weight: bold; font-size: 18px; color: #242b3d">
                    {{$producto->nombre}}
                </p>
                <p style="display:block; margin-bottom: 8px; color: #424651;margin-top: 0">
                    Ofrecido Por: {{$producto->Empresa->nombre}}
                </p>
                <p style="display:block; color: #82899a; font-size: 14px;margin-bottom: 3px;margin-top: 0">
                    Garantia Retenida ${{$producto->garantia}}
                </p>
                <p style="display:block; color: #82899a; font-size: 14px;margin-bottom: 3px;margin-top: 0">
                    Tipo de Subasta: {{$producto->tipo_subasta}}
                </p>
            </div>
        </div>
    </x-slot>
</x-email>
