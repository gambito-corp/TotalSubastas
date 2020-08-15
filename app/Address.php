<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'pais_id',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'tipo_via',
        'direccion1',
        'direccion2',
        'numero',
        'int_ext',
        'referencia',
        'titulo_direccion'
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
        'user_id'           => 'integer',
        'pais_id'           => 'integer',
        'departamento_id'   => 'integer',
        'provincia_id'      => 'integer',
        'distrito_id'       => 'integer',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    //RELACIONES
    public function Pais()
    {
        return $this->belongsTo(Country::class, 'pais_id', 'id');
    }

    public function Departamento()
    {
        return $this->belongsTo(Country::class, 'departamento_id', 'id');
    }

    public function Provincia()
    {
        return $this->belongsTo(Country::class, 'provincia_id', 'id');
    }

    public function Distrito()
    {
        return $this->belongsTo(Country::class, 'distrito_id', 'id');
    }

    public function Usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Persona()
    {
        return $this->hasOne(Person::class, 'user_id');
    }

    public function Juridica()
    {
        return $this->hasOne(LegalPerson::class, 'user_id');
    }
}
