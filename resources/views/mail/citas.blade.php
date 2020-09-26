<x-email titulo="Usuario Registrado" submit="" ruta="ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="">
    <h2 >Se Acaba de Recibir una Cita!</h2>
    <p >La Cita Fue Para el Vehiculo: {{$producto->nombre}}</p>
    <p >El usuario que desea ver el vehiculo es: {{$user->name}}</p>
    <p >el Email del Usuario: {{$user->email}}</p>
    <p >El Usuario es: {{$user->tipo == 'natural'? 'Persona Natural': 'Persona Juridica'}}</p>
    <p >La Fecha Para La que quiere ver el vehiculo es: {{$request['fecha']}} A las {{$request['hora']}}</p>
</x-email>
