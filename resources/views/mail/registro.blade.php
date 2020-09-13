<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <title>Registro de usuario</title>
    </head>
    <body>

    <p>Hola! Se ha Registrado un nuevo Usuario hace {{$user->created_at}}</p>
    <p>Estos son los datos del usuario que ha realizado El Registro</p>

    <ul>
        <li>Nombre: {{ $user->name }}</li>
        <li>Teléfono: {{ $user->mail }}</li>
        <li>DNI: Test</li>
    </ul>

    <ul>
        <li>
            Todo esto es un Email de Ejemplo
        </li>
    </ul>
    </body>
</html>
