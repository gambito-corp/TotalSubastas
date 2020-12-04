<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{env('APP_URL').'/css/app.css'}}">
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 10px;
            background-color: #EDEFF0;
        }

        .div1 {
            padding: 0 25px;
            grid-area: 1 / 2 / 6 / 3;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 10px;
            background-color: #fff;
            width: 100%;
            max-width: 650px;
            margin:0 auto;
            margin-top: 30px;
        }
        .div2 {
            grid-area: 1 / 2 / 2 / 3;
        }

        .div3 { grid-area: 2 / 2 / 3 / 3; }
        .div4 { grid-area: 3 / 2 / 4 / 3; }
        .div5 { 
            grid-area: 6 / 2 / 7 / 3; 
            width: 100%;
            max-width: 650px;
            margin:0 auto;
            padding: 20px;
        }

        img {
            display:block;
            margin:auto;
        }
        .submit {
            text-decoration: none;
            outline: none;
            color: #ffffff;
            display: inline-block;
            padding: 12px 24px;
            background: #126de5;
            border-radius: 4px;
        }

        li {
            margin-right: 30px;
            float:left;
        }
        li:first-child{
            /*margin-left: -20px;*/
            list-style: none;
        }
        .sociales{
            display: inline;
            float:right;
        }
        .color-mailing{
            color: #424651;
            font-size: 16px;
            text-align: center;
        }
        .titulo-usuario{
            color: #000;
            font-size: 28px;
            text-align: center;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
<div class="parent">
    <div class="div1">
        <a class="o_text-primary" href="{{env('APP_URL')}}" style="text-decoration: none;outline: none;color: #126de5;">
            <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/logos/logo_300px.png" width="136" alt="Total Subastas" style="margin-top: 30px">
        </a>
        <br>
        <div class="div2" style="padding: 40px 30px 0 30px">
            {{$slot}}
        </div>
        <br>
        @isset($ruta)
            <div class="div3" style="text-align: center;">
                @if($metodo == 'get')
                    @isset($submit)
                    <div>
                        <a href="{{$ruta?$ruta:'#'}}" class="submit">{{$submit}}</a>
                    </div>
                    @endisset
                @else
                <form action="{{$ruta?$ruta:'#'}}" method="{{$metodo}}">
                    @csrf
                    @isset($oculto)
                        {{$oculto}}
                    @endisset
                    @isset($submit)
                    <div>
                        <input type="submit" class="submit" value="{{$submit}}"/>
                    </div>
                    @endisset
                </form>
                @endif

            </div>
        @endisset
        <br>
        @isset($recordatorio)
            <div class="div4">
                {{$recordatorio}}
            </div>
        @endisset
    </div>
    <div class="div5">
        <p>
            &copy;2020 Total Subastas | Lima - Perú
        </p>
        <ul style="padding-left: 0">
            <li>
                <a href="https://example.com/" class="text-secondary">Ayuda</a>
            </li>
            <li>
                <a href="https://example.com/" class="text-secondary">Subastar</a>
            </li>
            <li>
                <a href="https://example.com/" class="text-secondary">Vender</a>
            </li>
            <li>
                <a href="https://example.com/" class="text-secondary">Contactenos</a>
            </li>
        </ul>
        <div class="sociales">
            <a href="https://example.com/" class="sociales">
                <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/email/facebook-light.png" width="36" height="36" alt="fb">
            </a>
            <a href="https://example.com/" class="sociales">
                <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/Icons/email/instagram-light.png" width="36" height="36" alt="ig">
            </a>
        </div>
    </div>
</div>
</body>
</html>
