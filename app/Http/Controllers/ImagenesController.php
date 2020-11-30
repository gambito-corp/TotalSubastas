<?php

namespace App\Http\Controllers;

use App\Company;
use App\DocumentosVehiculo;
use App\Helpers\Gambito;
use App\ImagenesVehiculo;
use App\Producto;
use App\Slide;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImagenesController extends Controller
{

    protected $transparencia = 20;


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
        $data = Producto::where('id', $id)->first();
        $file = Image::make(Storage::disk('s3')->get('producto/'.$data->imagen));
        $watermark = Image::make(Storage::disk('s3')->get('producto/marca.png'))
            ->opacity($this->transparencia)->resize('200', '180');
        $file->insert($watermark, 'center')
            ->response();
        $code = 200;
        return new Response($file,$code);
    }
    public function getProductoImagen($id)
    {
        $id = Gambito::hash($id, true);
        $data = ImagenesVehiculo::where('id', $id)->first();
        $file = Image::make(Storage::disk('s3')->get('producto/set/'.$data->imagen));
        $watermark = Image::make(Storage::disk('s3')->get('producto/marca.png'))
            ->opacity(($this->transparencia))->resize('200', '200');
        $file->insert($watermark, 'center')
            ->response();
        $code = 200;
        return new Response($file,$code);
    }

    public function getDownload($id, $file){
        $data = DocumentosVehiculo::with('Empresa', 'Lote', 'Producto')->where('id', $id)->first();
        $ruta = 'documentos/vehiculos/'.
            Str::slug($data->Empresa->nombre, "-").
            '/'.
            Str::slug($data->Lote->nombre, "-").
            '/' .
            Str::slug($data->Producto->nombre, "-").
            '/';
        $header = [
            'Content-Disposition: attachment',
            'Cache-Control: no-cache',
            'Content-Type: application/pdf',
        ];

        return Storage::disk('s3')->download($ruta.$file, $file, $header);
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

    public function getSlide($id)
    {
        $id = Gambito::hash($id, true);
        $data = Slide::where('id', $id)->first();
        $file = Storage::disk('s3')->get('slide/'.$data->ruta);
        $code = 200;
        return new Response($file,$code);
    }
}
