<?php

use Illuminate\Database\Seeder;
use App\VehicleDetail;
use Carbon\Carbon;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleDetail::create([
            'empresa_id'            => 1,
            'lote_id'               => 1,
            'producto_id'           => 1,
            'marca_id'              => 1,
            'modelo_id'             => 2,
            'year'                  => 2020,
            'placa'                 => 'hfe-123',
            'color'                 => 'rojo',
            'version'               => 'version',
            'ubicacion'             => 'Ubicacion',
            'timon'                 => 'timon',
            'asientos'              => 4,
            'estado_vehiculo'       => 'estado del vehiculo',
            'ficha_tecnica'         => 'ruta de la ficha tecnica',
            'informacion'           => 'descripcion del Producto',
            'direccion'             => 'direccion',
            'video'                 => 'ruta del video',
            'video_url'             => 'url del video',
            'valor_interno_activo'  => 'valor interno del activo',
            'saneado'               => 'saneado si/no',
            'captura'               => 'captura si/no',
            'seguro'                => 'seguro',
            'soat'                  => 'soat',
            'rtv'                   => 'rtv',
            'terminos'              => 'descripcion de los terminos',
            'combustible'           => 'combustible',
            'traccion'              => 'tipo de traccion',
            'torque'                => 'torque',
            'potencia'              => 'potencia',
            'cilindrada'            => 'cilindrada',
            'velocidades'           => 'Velocidades',
            'trasmision'            => 'transmision',
            'puertas'               => 'nª de puertas',
            'freno_delantero'       => 'freno delantero',
            'freno_trasero'         => 'Freno Trasero',
            'tipo_freno'            => 'Tipo de Freno',
            'am_fm'                 => 'Radio',
            'cd'                    => 'cd',
            'sd'                    => 'sd',
            'aux'                   => 'aux',
            'usb'                   => 'usb',
            'bluetooth'             => 'bt',
            'neumaticos'            => 'neumaticos',
            'tapizado'              => 'tapizado',
            'airbag'                => 'airbags',
            'alarma'                => 'alarma',
            'aros'                  => 'aros',
            'neblineros'            => 'faros neblineros',
            'lunas'                 => 'lunas',
            'gps'                   => 'gps',
            'sensores'              => 'sensores',
            'kilometraje'           => 'kilometraje',
        ]);
    }
}
