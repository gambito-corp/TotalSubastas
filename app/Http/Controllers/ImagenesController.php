<?php

namespace App\Http\Controllers;

use App\Company;
use App\Helpers\Gambito;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImagenesController extends Controller
{
    public function getAvatar($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){
            $data = User::where('id', $id)->first();
            $file = Storage::disk('s3')->get('avatar/'.$data->avatar);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('avatar/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    public function getEmpresa($id)
    {
        $id = Gambito::hash($id, true);
        $data = Company::where('id', $id)->first();
        $file = Storage::disk('s3')->get('empresa/'.$data->imagen);
        $code = 200;
        return new Response($file,$code);
    }


    public function getProducto($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){

        }else{

        }
    }

    public function getProductoImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){

        }else{

        }
    }

    public function getDocumentos($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){

        }else{

        }
    }

    public function getDni($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){

        }else{

        }
    }

    public function getBoucher($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){

        }else{

        }
    }
}
