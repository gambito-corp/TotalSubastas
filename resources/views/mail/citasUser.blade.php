<x-email titulo="Usuario Registrado" submit="" ruta="#" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="">
    <h2 >Se Acabas de Agendar una Cita!</h2>
    <p >La Cita Fue Para el Vehiculo: {{$producto->nombre}}</p>
    <p >La Fecha Para La que quieres ver el vehiculo es: {{$request['fecha']}} A las {{$request['hora']}}</p>
</x-email>
