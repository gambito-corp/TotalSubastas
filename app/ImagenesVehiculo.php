<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ImagenesVehiculo extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

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
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime',
    ];

    public function Vehiculo()
    {
        return $this->belongsTo('App\Vehicle', 'vehiculo_id');
    }

    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

}
