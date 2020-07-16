<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ModelVehicle extends Model
{

    use SoftDeletes;


    protected $table = "models";


    protected $fillable = ['marca_id', 'nombre', 'slug'];


    public function Marca()
    {
        return $this->belongsTo(Brand::class, 'marca_id');
    }
}
