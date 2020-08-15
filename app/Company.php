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
    protected $guarded = [

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
        'id'                    => 'integer',
        'persona_juridica_id'   => 'integer',
        'created_at'            => 'datetime',
        'updated_at'            => 'datetime',
        'deleted_at'            => 'datetime',
    ];


    //Relaciones Belongs to

    // relaciones HasMany
    public function Lotes()
    {
        return $this->hasMany(Lot::class, 'empresa_id');
    }
    public function Productos()
    {
        return $this->hasMany(Producto::class, 'empresa_id');
    }
    public function Rango($min, $max)
    {
        return $this->hasMany(Producto::class, 'empresa_id')->whereBetween('precio', [$min, $max])->dd();
    }

    public function Juridica()
    {
        return $this->belongsTo(LegalPerson::class, 'persona_juridica_id');
    }

    public function Direccion()
    {
        return $this->belongsTo(Address::class, 'direccion_id');
    }

}
