<x-email titulo="Usuario Registrado" submit="Click Para ContraOfertar" :ruta="$ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="">
    <h2 >Alerta de Puja {{$user->name}}!</h2>
    <p >Atencion {{$user->name}} tu Producto {{$producto->nombre}} Esta Recibiendo Ofertas</p>
    <p >No dejes Que te lo quiten</p>

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
