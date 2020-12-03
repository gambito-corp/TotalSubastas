<x-email titulo="Usuario Registrado" submit="Click para Confirmar" :ruta="$ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172989_candado_compu.png" width="136" alt="SimpleApp">
    <h2 class="titulo-usuario">Felicitaciones {{$user->name}}!</h2>
    <p style="color: #82899a; font-size: 18px; text-align: center;" >Ya falta poco para crear tu cuenta</p>

    <x-slot name="recordatorio">
        <p class="color-mailing" style="padding-top: 50px;">Recuerda que este correo vence en 5 minutos.</p>
        <p class="color-mailing">Una vez creada tu cuenta sigue los pasos para actualizar tu información pendiente.</p>
    </x-slot>
</x-email>
