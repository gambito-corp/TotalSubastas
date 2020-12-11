@push('styles')
    <style>
        .text16{
            /*color: yellow;*/
            font-size: 16px;
        }
    </style>
@endpush

<div class="col-md col-md-12 col-lg-12   mt-0 pt-2 data_sheet-d">
  <div class="row">
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 pl-0 pb-0">
      <div class="nav flex-column data_sheet-menu nav-pills" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">
        <p class="font-weight-bold border-bottom text-center p-3 text-uppercase">Caracteristicas</p>
        <a class="d-sheet_link border-bottom  pb-5 active" id="v-pills-home-tab" data-toggle="pill"
          href="#v-pills-resumen" role="tab" aria-controls="v-pills-home" aria-selected="true">resumen
          <br> <img src="{{asset('assets/img/Trazado 1851.svg')}}" alt="" srcset="">
        </a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-ficha_tecnica-tab" data-toggle="pill"
          href="#v-pills-ficha_tenica" role="tab" aria-controls="v-pills-ficha_tecnica"
          aria-selected="false">ficha tecnica<br> <img src="{{asset('assets/img/Trazado 1841.svg')}}" class="" alt=""
            srcset=""></a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-equipamiento-tab" data-toggle="pill"
          href="#v-pills-equipamiento" role="tab" aria-controls="v-pills-equipamiento"
          aria-selected="false">equipamiento <br> <img src="{{asset('assets/img/Trazado 1832.svg')}}" class="" alt=""
            srcset=""></a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-otros-tab" data-toggle="pill"
          href="#v-pills-otros" role="tab" aria-controls="v-pills-otros" aria-selected="false">otros<br>
          <img src="{{asset('assets/img/Trazado 1850.svg')}}" class="" alt="" srcset=""></a>
        <a class="d-sheet_link pb-5 " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
          role="tab" aria-controls="v-pills-settings" aria-selected="false">observaciones<br> <img
            src="{{asset('assets/img/Trazado 1835.svg')}}" class="" alt="" srcset=""></a>
      </div>
    </div>
    <div class="col-8 pt-3 p-4 pr-2">
      <div class="tab-content" id="v-pills-tabContent" data-spy="scroll" data-target="#v-pills-tab">
        <div class="tab-pane fade show active" id="v-pills-resumen" role="tabpanel"
          aria-labelledby="v-pills-resumen-tab">
          <p>
            {!!$producto->Vehiculo != null? $producto->Vehiculo->informacion: ''!!}
          </p>

          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Kilometraje</strong> <br>
              @isset($producto->Vehiculo->kilometraje)
                <p class="text16">{{$producto->Vehiculo->kilometraje}}</p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Combustible</strong> <br>
              @isset($producto->Vehiculo->combustible)
                 <p class="text16">{{$producto->Vehiculo->combustible}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Ubicacion</strong> <br>
                @isset($producto->Vehiculo->ubicacion)
                 <p class="text16">{{$producto->Vehiculo->ubicacion}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Marca</strong> <br>

              @isset($producto->Vehiculo->Marca->nombre)
                 <p class="text16">{{$producto->Vehiculo->Marca->nombre}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Modelo</strong>
              <br>
              @isset($producto->Vehiculo->Modelo->nombre)
                 <p class="text16">{{$producto->Vehiculo->Modelo->nombre}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Año</strong> <br>
                @isset($producto->Vehiculo->year)
                     <p class="text16">{{$producto->Vehiculo->year}} </p>
                @else
                     <p class="text16">Sin Datos en la BD </p>
                @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Nombre</strong>
              <br>
              @isset($producto->nombre)
                 <p class="text16">{{$producto->nombre}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Color</strong>
              <br>
              @isset($producto->Vehiculo->color)
                 <p class="text16">{{$producto->Vehiculo->color}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Placa</strong> <br>
              @isset($producto->Vehiculo->placa)
                 <p class="text16">{{$producto->Vehiculo->placa}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-ficha_tenica" role="tabpanel"
          aria-labelledby="v-pills-ficha_tecnica">
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Traccion</strong> <br>
              @isset($producto->Vehiculo->traccion)
                 <p class="text16">{{$producto->Vehiculo->traccion}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Torque</strong> <br>
              @isset($producto->Vehiculo->torque)
                 <p class="text16">{{$producto->Vehiculo->torque}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Pontencia</strong> <br>
                @isset($producto->Vehiculo->potencia)
                 <p class="text16">{{$producto->Vehiculo->potencia}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Cilindrada</strong> <br>
              @isset($producto->Vehiculo->cilindrada)
                 <p class="text16">{{$producto->Vehiculo->cilindrada}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Velocidades</strong>
              <br>
              @isset($producto->Vehiculo->velocidades)
                 <p class="text16">{{$producto->Vehiculo->velocidades}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Version</strong> <br>
                @isset($producto->Vehiculo->version)
                 <p class="text16">{{$producto->Vehiculo->version}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Timon</strong>
              <br>
              @isset($producto->Vehiculo->timon)
                 <p class="text16">{{$producto->Vehiculo->timon}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-equipamiento" role="tabpanel"
          aria-labelledby="v-pills-equipamiento-tab">
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Neumaticos</strong> <br>
              @isset($producto->Vehiculo->neumaticos)
                 <p class="text16">{{$producto->Vehiculo->neumaticos}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Airbag</strong> <br>
              @isset($producto->Vehiculo->airbag)
                 <p class="text16">{{$producto->Vehiculo->airbag ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Aros</strong> <br>
                @isset($producto->Vehiculo->aros)
                 <p class="text16">{{$producto->Vehiculo->aros}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Lunas Polarizadas</strong> <br>
              @isset($producto->Vehiculo->lunas)
                 <p class="text16">{{$producto->Vehiculo->lunas ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Gps</strong>
              <br>
              @isset($producto->Vehiculo->gps)
                 <p class="text16">{{$producto->Vehiculo->gps  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Asientos</strong> <br>
                @isset($producto->Vehiculo->asientos)
                 <p class="text16">{{$producto->Vehiculo->asientos}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-otros" role="tabpanel" aria-labelledby="v-pills-otros-tab">
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Bluetooth</strong> <br>
              @isset($producto->Vehiculo->bluetooth)
                 <p class="text16">{{$producto->Vehiculo->bluetooth  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Radio</strong> <br>
              @isset($producto->Vehiculo->am_fm)
                 <p class="text16">{{$producto->Vehiculo->am_fm  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Reproductor</strong> <br>
                @isset($producto->Vehiculo->cd)
                 <p class="text16">{{$producto->Vehiculo->cd  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Soporte de Tarjeta</strong> <br>
              @isset($producto->Vehiculo->sd)
                 <p class="text16">{{$producto->Vehiculo->sd  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Audio Aux</strong>
              <br>
              @isset($producto->Vehiculo->aux)
                 <p class="text16">{{$producto->Vehiculo->aux  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Entrada USB</strong> <br>
                @isset($producto->Vehiculo->usb)
                 <p class="text16">{{$producto->Vehiculo->usb  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Tapizado</strong>
              <br>
              @isset($producto->Vehiculo->tapizado)
                 <p class="text16">{{$producto->Vehiculo->tapizado}} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Alarma</strong> <br>
                @isset($producto->Vehiculo->alarma)
                 <p class="text16">{{$producto->Vehiculo->alarma  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Faros Neblineros</strong>
              <br>
              @isset($producto->Vehiculo->neblineros)
                 <p class="text16">{{$producto->Vehiculo->neblineros  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Sensores</strong> <br>
                @isset($producto->Vehiculo->sensores)
                 <p class="text16">{{$producto->Vehiculo->sensores  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
          aria-labelledby="v-pills-settings-tab">
          <strong>Estado del Vehiculo</strong>
          <br>
          @isset($producto->Vehiculo->estado_vehiculo)
                {!!$producto->Vehiculo->estado_vehiculo!!}
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Saneado</strong> <br>
              @isset($producto->Vehiculo->saneado)
                 <p class="text16">{{$producto->Vehiculo->saneado  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Captura</strong> <br>
              @isset($producto->Vehiculo->captura)
                 <p class="text16">{{$producto->Vehiculo->captura  ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Seguro</strong> <br>
              @isset($producto->Vehiculo->seguro)
                 <p class="text16">{{$producto->Vehiculo->seguro ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>SOAT</strong> <br>
              @isset($producto->Vehiculo->soat)
                 <p class="text16">{{$producto->Vehiculo->soat ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>RTV</strong> <br>
              @isset($producto->Vehiculo->rtv)
                 <p class="text16">{{$producto->Vehiculo->rtv ? 'si':'no' }} </p>
              @else
                 <p class="text16">Sin Datos en la BD </p>
              @endisset
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
