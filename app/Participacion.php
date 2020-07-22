<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{


    public function Productos()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
