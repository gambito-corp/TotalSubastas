<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auction extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id',
        'ganador_id',
        'segundo_id',
        'tercero_id',
        'cuarto_id'
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
        'producto_id'   => 'integer',
        'ganador_id'    => 'integer',
        'segundo_id'    => 'integer',
        'tercero_id'    => 'integer',
        'cuarto_id'     => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime',
    ];

    //RELACIONES
    public function products()
    {
        return $this->hasOne(Producto::class)->withDefault();
    }

    public function Ganador()
    {
        return $this->hasOne(User::class)->withDefault();
    }

    public function Segundo()
    {
        return $this->hasOne(User::class)->withDefault();
    }

    public function Tercero()
    {
        return $this->hasOne(User::class)->withDefault();
    }

    public function Cuarto()
    {
        return $this->hasOne(User::class)->withDefault();
    }

}
