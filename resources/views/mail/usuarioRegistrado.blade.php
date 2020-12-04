<x-email titulo="Usuario Registrado" submit="Click para Confirmar" :ruta="$ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172989_candado_compu.png" width="136" alt="SimpleApp">
    <h2 class="titulo-usuario">Felicitaciones {{$user->name}}!</h2>
    <p style="color: #82899a; font-size: 18px; text-align: center; margin-bottom: 4px;" >Ya falta poco para crear tu cuenta</p>

    <x-slot name="recordatorio">
        <p class="color-mailing" style="padding-top: 40px; margin-bottom: 0px">Recuerda que este correo vence en 5 minutos.</p>
        <p class="color-mailing" style="margin-bottom: 40px;">Una vez creada tu cuenta sigue los pasos para actualizar tu información pendiente.</p>
    </x-slot>
</x-email>
