
<div class="container">
    <div class="card-group mt-3">
        <div class="card border-info">
            <div class="card-body text-center">
                <h4 class="card-text text-capitalize">{{'nombres: '.$data->titulo.' '.$data->subtitulo }}</h4>
                <p class="card-text text-capitalize">{{ 'Email: '.$data->email }} </p>
                <p class="card-text text-capitalize">{{ 'Descripcion: '.$data->contenido }} </p>
                <p class="card-text text-capitalize">Creado en: {{ $data->created_at }} </p>
                <p class="card-text text-capitalize">Actualizado en: {{ $data->updated_at }} </p>
                <p class="card-text text-capitalize">Eliminado en: {{ $data->deleted_at }} </p>
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
