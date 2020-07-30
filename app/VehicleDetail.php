<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class VehicleDetail extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'empresa_id'    => 'integer',
        'lote_id'       => 'integer',
        'producto_id'   => 'integer',
        'marca_id'      => 'integer',
        'modelo_id'     => 'integer',
        'year'          => 'integer',
        'asientos'      => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime',
    ];

    //RELACIONES
    public function Marca()
    {
        return $this->belongsTo(Brand::class, 'marca_id')->withDefault();
    }

    public function Modelo()
    {
        return $this->belongsTo(Brand::class, 'modelo_id')->withDefault();
    }

}
