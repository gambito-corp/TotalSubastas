<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentosVehiculo extends Model
{
    use SoftDeletes;
    protected $table = 'documents_vehicles';

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
        'id'                => 'integer',
        'empresa_id'        => 'integer',
        'lote_id'           => 'integer',
        'producto_id'       => 'integer',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    //RELACIONES
    public function Empresa_manual(DocumentosVehiculo $documento)
    {
        $empresa_id = $documento->empresa_id;
        $empresa = Company::where('id', $empresa_id)->first();
        dd('holi', $empresa_id, $empresa);
    }



    public function Empresa()
    {
        return $this->belongsTo(Company::class, 'empresa_id');
    }

    public function Lote()
    {
        return $this->belongsTo(Lot::class, 'lote_id');
    }

    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
