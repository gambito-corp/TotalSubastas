<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
content="{{ isset($data->metadescripcion) ? $data->metadescripcion : 'Default' }}">
<meta name="keyword" content="{{ isset($data->keyword) ? $data->keyword : 'Default' }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
