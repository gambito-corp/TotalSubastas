<?php

namespace App\Policies;

use App\Acceso;
use App\Autorizacion;
use App\Permiso;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Rol;
use App\User;

class RolPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if($user->id == 1){
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $Acceso = Acceso::all();
        $Permiso = Permiso::all();
        $Rol = Rol::all();

        //  Si el User->role_id esta en la tabla accesos y esta junto a Permiso_id de la tabla acceso y con el controlador_id especifico
        //  entonces retorna true, en caso contrario retorna false



    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rol  $rol
     * @return mixed
     */
    public function view(User $user, Rol $rol)
    {

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rol  $rol
     * @return mixed
     */
    public function update(User $user, Rol $rol)
    {

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rol  $rol
     * @return mixed
     */
    public function delete(User $user, Rol $rol)
    {

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rol  $rol
     * @return mixed
     */
    public function restore(User $user, Rol $rol)
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rol  $rol
     * @return mixed
     */
    public function forceDelete(User $user, Rol $rol)
    {

    }
}
