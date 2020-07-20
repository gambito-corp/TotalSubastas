<div class="col-md col-md-12 col-lg-12   mt-0 pt-2 data_sheet-d">
  <div class="row">
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 pl-0 pb-0">
      <div class="nav flex-column data_sheet-menu nav-pills" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">
        <a class="font-weight-bold border-bottom text-center p-3 text-uppercase">Caracteristicas</a>
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
            {!!'lo que determina el consumo de combustible de una moto, esta dado principalmente por el
            tamaÃƒÂ±o de su
            motor, el peso general de la moto y el tipo
            de conducciÃ³n que mantenga el piloto. En leo 110, los dos primeros factores estan a favor de un
            excelente rendimiento de combustible, que sumados
            a una conducciÃ³n tranquila, permiten entregar una autonomia aproximada de 165 km. con su toque
            de 0.92 galones a tope'!!}
          </p>

          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Kilometraje</strong> <br>
              @isset($producto->Vehiculo->kilometraje)
                <small>{{$producto->Vehiculo->kilometraje}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Combustible</strong> <br>
              @isset($producto->Vehiculo->combustible)
                <small>{{$producto->Vehiculo->combustible}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Ubicacion</strong> <br>
                @isset($producto->Vehiculo->ubicacion)
                <small>{{$producto->Vehiculo->ubicacion}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Marca</strong> <br>

              @isset($producto->Vehiculo->Marca->nombre)
                <small>{{$producto->Vehiculo->Marca->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Modelo</strong>
              <br>
              @isset($producto->Vehiculo->Modelo->nombre)
                <small>{{$producto->Vehiculo->Marca->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Año</strong> <br>
                @isset($producto->Vehiculo->year)
                <small>{{$producto->Vehiculo->year}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Nombre</strong>
              <br>
              @isset($producto->nombre)
                <small>{{$producto->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Color</strong>
              <br>
              @isset($producto->Vehiculo->color)
                <small>{{$producto->Vehiculo->color}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Placa</strong> <br>
              @isset($producto->Vehiculo->placa)
                <small>{{$producto->Vehiculo->placa}}</small>
              @else
                <small>Sin Datos en la BD</small>
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
                <small>{{$producto->Vehiculo->traccion}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Torque</strong> <br>
              @isset($producto->Vehiculo->torque)
                <small>{{$producto->Vehiculo->torque}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Pontencia</strong> <br>
                @isset($producto->Vehiculo->potencia)
                <small>{{$producto->Vehiculo->potencia}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Cilindrada</strong> <br>
              @isset($producto->Vehiculo->cilindrada)
                <small>{{$producto->Vehiculo->cilindrada}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Velocidades</strong>
              <br>
              @isset($producto->Vehiculo->velocidades)
                <small>{{$producto->Vehiculo->velocidades}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Version</strong> <br>
                @isset($producto->Vehiculo->version)
                <small>{{$producto->Vehiculo->version}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Timon</strong>
              <br>
              @isset($producto->Vehiculo->timon)
                <small>{{$producto->Vehiculo->timon}}</small>
              @else
                <small>Sin Datos en la BD</small>
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
                <small>{{$producto->Vehiculo->neumaticos}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Airbag</strong> <br>
              @isset($producto->Vehiculo->airbag)
                <small>{{$producto->Vehiculo->airbag}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Aros</strong> <br>
                @isset($producto->Vehiculo->aros)
                <small>{{$producto->Vehiculo->aros}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Lunas</strong> <br>
              @isset($producto->Vehiculo->lunas)
                <small>{{$producto->Vehiculo->lunas}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Gps</strong>
              <br>
              @isset($producto->Vehiculo->gps)
                <small>{{$producto->Vehiculo->gps}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Asientos</strong> <br>
                @isset($producto->Vehiculo->asientos)
                <small>{{$producto->Vehiculo->asientos}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-otros" role="tabpanel" aria-labelledby="v-pills-otros-tab">
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Bluetooth</strong> <br>
              @isset($producto->Vehiculo->bluetooth)
                <small>{{$producto->Vehiculo->bluetooth}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Radio</strong> <br>
              @isset($producto->Vehiculo->am_fm)
                <small>{{$producto->Vehiculo->am_fm}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Reproductor</strong> <br>
                @isset($producto->Vehiculo->cd)
                <small>{{$producto->Vehiculo->cd}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Soporte de Tarjeta</strong> <br>
              @isset($producto->Vehiculo->sd)
                <small>{{$producto->Vehiculo->sd}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Audio Aux</strong>
              <br>
              @isset($producto->Vehiculo->aux)
                <small>{{$producto->Vehiculo->aux}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Entrada USB</strong> <br>
                @isset($producto->Vehiculo->usb)
                <small>{{$producto->Vehiculo->usb}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Tapizado</strong>
              <br>
              @isset($producto->Vehiculo->tapizado)
                <small>{{$producto->Vehiculo->tapizado}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Alarma</strong> <br>
                @isset($producto->Vehiculo->alarma)
                <small>{{$producto->Vehiculo->alarma}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Faros Neblineros</strong>
              <br>
              @isset($producto->Vehiculo->neblineros)
                <small>{{$producto->Vehiculo->neblineros}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Sensores</strong> <br>
                @isset($producto->Vehiculo->sensores)
                <small>{{$producto->Vehiculo->sensores}}</small>
              @else
                <small>Sin Datos en la BD</small>
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
                <small>Sin Datos en la BD</small>
              @endisset
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Saneado</strong> <br>
              @isset($producto->Vehiculo->saneado)
                <small>{{$producto->Vehiculo->saneado}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Captura</strong> <br>
              @isset($producto->Vehiculo->captura)
                <small>{{$producto->Vehiculo->captura}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Seguro</strong> <br>
              @isset($producto->Vehiculo->seguro)
                <small>{{$producto->Vehiculo->seguro}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>SOAT</strong> <br>
              @isset($producto->Vehiculo->soat)
                <small>{{$producto->Vehiculo->soat}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>RTV</strong> <br>
              @isset($producto->Vehiculo->rtv)
                <small>{{$producto->Vehiculo->rtv}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
