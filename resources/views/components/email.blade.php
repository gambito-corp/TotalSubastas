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
        }
        .div2 {
            grid-area: 1 / 2 / 2 / 3;
        }

        .div3 { grid-area: 2 / 2 / 3 / 3; }
        .div4 { grid-area: 3 / 2 / 4 / 3; }
        .div5 { grid-area: 6 / 2 / 7 / 3; }

        img {
            display:block;
            margin:auto;
        }
        .submit {
            display: block;
            margin: auto;
            box-sizing: content-box;
            cursor: pointer;
            padding: 10px 20px;
            border: 1px solid #018dc4;
            border-radius: 3px;
            color: rgba(255,255,255,0.9);
            text-overflow: clip;
            background: #0199d9;
            box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
            text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
            transition: all 500ms cubic-bezier(0.42, 0, 0.58, 1);
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
    </style>
</head>
<body>
<div class="parent">
    <div class="div1">
        <a class="o_text-primary" href="{{env('APP_URL')}}" style="text-decoration: none;outline: none;color: #126de5;">
            <img src="https://totalsubastas.s3.us-east-2.amazonaws.com/assets/logos/logo_300px.png" width="136" alt="Total Subastas">
        </a>
        <br>
        <div class="div2">
            {{$slot}}
        </div>
        <br>
        @isset($ruta)
            <div class="div3">
                <form action="{{$ruta?$ruta:'#'}}" method="{{$metodo}}">
                    @csrf
                    @isset($oculto)
                        {{$oculto}}
                    @endisset
                    @isset($submit)
                        <input type="submit" class="submit" value="{{$submit}}"/>
                    @endisset
                </form>
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
        </p> &nbsp;
        <ul>
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
