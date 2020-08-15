<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Person extends Model
{
    use SoftDeletes;

    protected $table = 'people';
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
        'user_id'           => 'integer',
        'direccion_id'      => 'integer',
        'banco_id'          => 'integer',
        'numero_documento'  => 'integer',
        'digito_documento'  => 'integer',
        'b_day'             => 'date',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

//    Metodos Personalizados

    public function bDay()
    {
        return Carbon::parse($this->b_day->format('d-m-'.now('Y')))->diffInDays();
    }

    //Relaciones
    public function Usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Direccion()
    {
        return $this->belongsTo(Address::class, 'direccion_id');
    }

    public function Banco()
    {
        return $this->belongsTo(Bank::class, 'banco_id');
    }

    public function Juridica()
    {
        return $this->hasOne(LegalPerson::class, 'persona_id');
    }

}
