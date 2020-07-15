<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ModelVehicle extends Model
{
    protected $table = "models";

    public function Marca()
    {
        return $this->belongsTo(Brand::class, 'marca_id');
    }
}
