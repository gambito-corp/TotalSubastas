@isset($documentos->documento1)
    <div class="col col-md-4 pl-0 pr-md-2 pr-sm-0 col-sm-12 col-xs-12 mt-4">
        <div class="card data_sheet-bottom_files">
            <div class="card-body d_sheet-card  text-center" style= "background-image: url('{{asset('/assets/img/File.svg')}}');
                background-repeat:no-repeat;
                background-position-x: 180px;
                background-position-y: 20px;">
                <!--<img src="./assets/img/File.svg" alt="">-->
                <h5 class="card-title pl-4 pt-2 text-light  text-uppercase text-left title_data-sheet_bottom">
                    {{$documentos->titulo1}}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                <p class="card-text text-light  pl-4 text-left mt-4 mb-3 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                    Descarga el pdf de {{$documentos->titulo1}}
                </p>
                <a href="{{route('admin.documentos.descargar', ['id' => $dat->id, 'file' => Illuminate\Support\Str::slug($dat->titulo1, '-').'.pdf'])}}" class="card-link card-link_auctions text-light text-right mt-4">
                    <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"></path>
                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"></path>
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"></path>
                    </svg>
                    Descargar
                </a>
            </div>
        </div>
    </div>
@endisset
@isset($documentos->documento2)
    <div class="col col-md-4 pl-0 pr-md-2 pr-sm-0 col-sm-12 col-xs-12 mt-4">
        <div class="card data_sheet-bottom_files">
            <div class="card-body d_sheet-card  text-center" style= "background-image: url('{{asset('/assets/img/File.svg')}}');
                background-repeat:no-repeat;
                background-position-x: 180px;
                background-position-y: 20px;">
                <!--<img src="./assets/img/File.svg" alt="">-->
                <h5 class="card-title pl-4 pt-2 text-light  text-uppercase text-left title_data-sheet_bottom">
                    {{$documentos->titulo2}}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                <p class="card-text text-light  pl-4 text-left mt-4 mb-3 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                    Descarga el pdf de {{$documentos->titulo2}}
                </p>
                <a href="{{route('descargar', ['id' => $documentos->id, 'file' => Illuminate\Support\Str::slug($documentos->titulo2, '-').'.pdf'])}}" class="card-link card-link_auctions text-light text-right mt-4">
                    <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"></path>
                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"></path>
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"></path>
                    </svg>
                    Descargar
                </a>
            </div>
        </div>
    </div>
@endisset
@isset($documentos->documento3)
    <div class="col col-md-4 pl-0 pr-md-2 pr-sm-0 col-sm-12 col-xs-12 mt-4">
        <div class="card data_sheet-bottom_files">
            <div class="card-body d_sheet-card  text-center" style= "background-image: url('{{asset('/assets/img/File.svg')}}');
                background-repeat:no-repeat;
                background-position-x: 180px;
                background-position-y: 20px;">
                <!--<img src="./assets/img/File.svg" alt="">-->
                <h5 class="card-title pl-4 pt-2 text-light  text-uppercase text-left title_data-sheet_bottom">
                    {{$documentos->titulo3}}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted "> </h6>
                <p class="card-text text-light  pl-4 text-left mt-4 mb-3 text-uppercase pb-4 border-bottom  text-doc_data-sheet">
                    Descarga el pdf de {{$documentos->titulo3}}
                </p>
                <a href="{{route('descargar', ['id' => $documentos->id, 'file' => Illuminate\Support\Str::slug($documentos->titulo3, '-').'.pdf'])}}" class="card-link card-link_auctions text-light text-right mt-4">
                    <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"></path>
                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"></path>
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"></path>
                    </svg>
                    Descargar
                </a>
            </div>
        </div>
    </div>
@endisset
