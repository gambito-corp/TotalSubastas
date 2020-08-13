<?php

namespace App\Http\Livewire\Admin\Form\User;

use App\Rol;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Cache;

class Create extends Component
{
    use WithFileUploads;
    public $roles;
    public $rolId;
    public $rolName;
    public $nombre;
    public $email;
    public $avatar;
    public $password;

    public function mount ()
    {
        $this->roles = Rol::all();
        $this->rolId;
        $this->rolName;
        $this->nombre;
        $this->email;
        $this->avatar;
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
        return view('livewire.admin.form.user.create');
    }
}
