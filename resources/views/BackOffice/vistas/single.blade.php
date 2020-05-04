
<div class="container">
    <div class="card-group mt-3">
        <div class="card border-info">
            <div class="card-body text-center">
                <h4 class="card-text text-capitalize">{{'nombre: '.$data[$clase['bd'][1]] }}</h4>
                <p class="card-text text-capitalize">{{ 'Descripcion: '.$data[$clase['bd'][2]] }} </p>
                <p class="card-text text-capitalize">{{ 'Slug: '.$data[$clase['bd'][3]] }} </p>
                <p class="card-text text-capitalize">Creado en: {{ $data->created_at }} </p>
                <p class="card-text text-capitalize">Actualizado en: {{ $data->updated_at }} </p>
                <p class="card-text text-capitalize">Eliminado en: {{ $data->deleted_at }} </p>
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
