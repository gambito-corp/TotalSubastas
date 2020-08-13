<?php

namespace App\Http\Livewire\Admin\Form\User;

use App\Rol;
use App\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $roles;
    public $rolId;
    public $rolName;
    public $nombre;
    public $email;
    public $avatar;
    public $password;
    public $identificador;

    public function mount (User $user)
    {
        $this->roles = Rol::all();
        $this->rolId = $user->rol_id;
        $this->rolName = $user->Rol->name;
        $this->nombre = $user->name;
        $this->email = $user->email;
        $this->avatar = $user->avatar;
        $this->identificador = $user->id;
        $this->password;
    }

    public function updatedrolId()
    {
        if($this->rolId != null)
        {
            Cache::put('rol', intval($this->rolId), 120);
        }else{
            Cache::forget('rol');
        }
    }

    public function render()
    {
        return view('livewire.admin.form.user.update');
    }
}
