<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDocumento extends Model
{
    use SoftDeletes;
    protected $table= 'tipo_documento';


    public function Contribuyente()
    {
        return $this->belongsTo(TipoContribuyente::class, 'contribuyente_id');
    }
}
