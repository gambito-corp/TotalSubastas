<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Company extends Model
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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];


    //Relaciones Belongs to

    // relaciones HasMany
    public function Lotes()
    {
        return $this->hasMany(Lot::class, 'empresa_id');
    }

    public function Productos()
    {
        return $this->hasManyThrough(Producto::class, Lot::class, 'empresa_id', 'lote_id');
    }
}
