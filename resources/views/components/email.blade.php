<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$titulo}}</title>
    <style>

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }



        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        h1, h2, h3, h4, h5, h6{
            margin-bottom: 0.5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        h1{
            font-size: 2.5rem;
        }

        h2{
            font-size: 2rem;
        }

        h3{
            font-size: 1.75rem;
        }

        h4{
            font-size: 1.5rem;
        }

        h5{
            font-size: 1.25rem;
        }

        h6{
            font-size: 1rem;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-1, .col-md-2, .col-md-6{
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .offset-3 {
            margin-left: 25%;
        }

        @media (min-width: 768px) {
            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }
            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn:hover, .btn:focus {
            text-decoration: none;
        }

        .btn:focus, .btn.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-secondary:focus, .btn-secondary.focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-secondary.disabled, .btn-secondary:disabled {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
        .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b;
        }

        .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-success:focus, .btn-success.focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
        .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430;
        }

        .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-warning:focus, .btn-warning.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-warning.disabled, .btn-warning:disabled {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
        .show > .btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500;
        }

        .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-danger:focus, .btn-danger.focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
        .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d;
        }

        .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 1px solid rgba(0, 0, 0, 0.125);
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-primary {
            color: #007bff !important;
        }

        a.text-primary:hover, a.text-primary:focus {
            color: #0062cc !important;
        }

        .text-secondary {
            color: #6c757d !important;
        }

        a.text-secondary:hover, a.text-secondary:focus {
            color: #545b62 !important;
        }

        .text-success {
            color: #28a745 !important;
        }

        a.text-success:hover, a.text-success:focus {
            color: #1e7e34 !important;
        }

        .text-warning {
            color: #ffc107 !important;
        }

        a.text-warning:hover, a.text-warning:focus {
            color: #d39e00 !important;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        a.text-danger:hover, a.text-danger:focus {
            color: #bd2130 !important;
        }

        .text-muted {
            color: #6c757d !important;
        }
    </style>
</head>
<body>
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
