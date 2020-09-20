<?php

namespace App;

use App\Notifications\AvisoDePuja as Aviso;
use App\Notifications\RegistroDeParticipante as Registro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Gambito;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Producto extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table='productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
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
        'user_id'           => 'integer',
        'precio'            => 'integer',
        'precio_reserva'    => 'integer',
        'garantia'          => 'integer',
        'puja'              => 'integer',
        'comision'          => 'integer',
        'started_at'        => 'datetime',
        'finalized_at'      => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    public function Hash ($id) {
        return Helpers\Gambito::hash($id);
    }

    /**
     * @param Producto $producto
     */
    public function Notificar(Producto $producto)
    {
        $user = User::where('id', Auth::id())->first();
        $this->notify(new Registro($user, $producto));
    }
    /**
     * @param Producto $producto
     */
    public function NotificarMasivo(Producto $producto, User $user)
    {
        $this->notify(new Aviso($user, $producto));
    }


    public function Empresa()
    {
        return $this->belongsTo(Company::class, 'empresa_id');
    }

    public function Lote()
    {
        return $this->belongsTo('App\Lot', 'lote_id');
    }

    public function Usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Vehiculo()
    {
        return $this->hasOne(VehicleDetail::class);
    }

    public function ranking()
    {
        return $this->hasMany(Ranking::class);
    }

    public function Mensaje()
    {
        return $this->hasMany(Message::class);
    }

    public function Imagenes()
    {
        return $this->hasMany(ImagenesVehiculo::class);
    }
    public function getFirstImageAttribute()
    {
        return asset($this->Imagenes->first()->imagen);
    }
}
