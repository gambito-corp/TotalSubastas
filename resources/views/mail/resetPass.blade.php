<x-email titulo="Usuario Registrado" submit="Click para Confirmar" :ruta="$ruta" :metodo="$metodo">

    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172975_huella_dedo.png" width="136">
    <h2 >Olvidaste tu Contraseña ? {{$user->name}}!</h2>
    <p >tranquil@ puedes recuperar tu cuenta</p>

    <x-slot name="oculto">
        <input type="hidden" name="user" value="{{$token}}">
    </x-slot>

    <x-slot name="recordatorio">
        <p>Recuerda que también puedes actualizar tu contraseña</p>
        <p>la veces que necesites desde <a href="{{env('APP_URL'.'/perfil')}}">cuenta de usuario</a></p>
    </x-slot>

</x-email>
