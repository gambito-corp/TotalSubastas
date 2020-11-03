<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LegalPerson extends Model
{
    use SoftDeletes;

    protected $table = 'legal_persons';

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
        'id'                => 'integer',
        'persona_id'        => 'integer',
        'banco_id'          => 'integer',
        'direccion_id'      => 'integer',
        'direccion2_id'     => 'integer',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    public function NombreCompleto()
    {
        return $this->Persona->nombres.' '.$this->Persona->apellidos;
    }

    public function Banco()
    {
        return $this->belongsTo(Bank::class, 'banco_id');
    }

    public function Direccion()
    {
        return $this->belongsTo(Address::class, 'direccion_id');
    }

    public function Direccion2()
    {
        return $this->belongsTo(Address::class, 'direccion2_id');
    }


}
