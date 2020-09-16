<x-email titulo="Usuario Registrado" submit="Click para Confirmar" :ruta="$ruta">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172989_candado_compu.png" width="136" alt="SimpleApp">
    <h2 >Felicitaciones {{$user->name}}!</h2>
    <p >Ya falta poco para crear tu cuenta</p>

    <x-slot name="oculto">
        <input type="hidden" name="user" value="{{$hash}}">
    </x-slot>

    <x-slot name="recordatorio">
        <p>Recuerda que este correo vence en 5 minutos.</p>
        <p>Una vez creada tu cuenta sigue los pasos para actualizar tu información pendiente.</p>
    </x-slot>
</x-email>
