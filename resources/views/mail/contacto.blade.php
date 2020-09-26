<x-email titulo="Usuario Registrado" submit="" ruta="ruta" :metodo="$metodo">
    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/security_internet/5172969file_ok.png" width="80" height="80" alt="">
    <h2 >Se Acaba de Recibir un Mensaje!</h2>
    <p >El Mensaje Fue Enviado por: {{$data['nombre']}}</p>
    <p >Bajo el Asunto: {{$data['asunto']}}</p>
    <p >El Usuario Necesita: {{$data['mensaje']}}</p>
    <p >Puedes Responderle a este Correo: {{$data['correo']}}</p>
</x-email>
