<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{$css}}">
    <style>

    </style>
</head>
<body>

<table>
    <thead>
        <tr></tr>
    </thead>
</table>




<!-- preview-text -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center row">
                <div class="card-header col-md-6 offset-3" style="background-color: rgba(0, 0, 0, 0.00); border-bottom: 0px solid rgba(0, 0, 0, 0.00);">
                    <p>
                        <a class="o_text-primary" href="{{env('APP_URL')}}" style="text-decoration: none;outline: none;color: #126de5;">
                            <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/logos/logo_300px.png" width="136" alt="Total Subastas">
                        </a>
                    </p>
                </div>
                <div class="card-body col-md-6 offset-3">
                    {{$slot}}
                    @isset($ruta)
                        <form action="{{$ruta?$ruta:'#'}}" method="post">
                            @csrf
                            @isset($oculto)
                                {{$oculto}}
                            @endisset
                            @isset($submit)
                                <input type="submit" class="btn btn-primary" value="{{$submit}}">
                            @endisset
                        </form>
                    @endisset
                </div>
                <div class="card-footer col-md-6 offset-3 text-muted" style="background-color: rgba(0, 0, 0, 0.00);">
                    @isset($recordatorio)
                        {{$recordatorio}}
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <p>&copy;2020 Total Subastas</p> &nbsp;
            <p>Lima - Perú</p>
            <br>
        </div>
        <div class="row ">
            <div class="col-md-2 offset-3">
                <ul>
                    <li>
                        <a href="https://example.com/" class="text-secondary">Ayuda</a>
                        <br>
                    </li>
                    <li>
                        <a href="https://example.com/" class="text-secondary">Subastar</a>
                        <br>
                    </li>
                    <li>
                        <a href="https://example.com/" class="text-secondary">Vender</a>
                        <br>
                    </li>
                    <li>
                        <a href="https://example.com/" class="text-secondary">Contactenos</a>
                        <br>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 offset-3">
                <a href="https://example.com/">
                    <img
                        src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/email/facebook-light.png"
                        width="36" height="36" alt="fb">
                </a>
                <span> &nbsp;</span>
                <a href="https://example.com/">
                    <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/email/instagram-light.png" width="36" height="36" alt="ig">
                </a>
                <span> &nbsp;</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
