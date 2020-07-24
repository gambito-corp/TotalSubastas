<?php

use App\DocumentosVehiculo;
use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentosVehiculo::create([
            'empresa_id' => 1,
            'lote_id' => 1,
            'producto_id' => 1,
            'titulo' => 'documento 1 del producto 1',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
        DocumentosVehiculo::create([
            'empresa_id' => 1,
            'lote_id' => 1,
            'producto_id' => 1,
            'titulo' => 'documento 2 del producto 1',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
        DocumentosVehiculo::create([
            'empresa_id' => 1,
            'lote_id' => 1,
            'producto_id' => 1,
            'titulo' => 'documento 3 del producto 1',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
        DocumentosVehiculo::create([
            'empresa_id' => 4,
            'lote_id' => 7,
            'producto_id' => 2,
            'titulo' => 'documento 1 del producto 2',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
        DocumentosVehiculo::create([
            'empresa_id' => 4,
            'lote_id' => 7,
            'producto_id' => 2,
            'titulo' => 'documento 2 del producto 2',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
        DocumentosVehiculo::create([
            'empresa_id' => 4,
            'lote_id' => 7,
            'producto_id' => 2,
            'titulo' => 'documento 3 del producto 2',
            'tipo' => 'PDF',
            'documento' => 'documentos/vehidulos/doc.pdf'
        ]);
    }
}
