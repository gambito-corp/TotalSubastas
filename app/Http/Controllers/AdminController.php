<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\User;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Auth::user();
        $clase =[                
            "bd"                => [//array con los nombres de los campos de la tabla segun la BD                
                "id",//array no indexado con los nombres de los campos de la BD                
                "nombre",//array no indexado con los nombres de los campos de la BD                
                "descripcion",//array no indexado con los nombres de los campos de la BD                
                "slug",//array no indexado con los nombres de los campos de la BD                
                "created_at",//array no indexado con los nombres de los campos de la BD                
                "updated_at",//array no indexado con los nombres de los campos de la BD                
                "deleted_at",//array no indexado con los nombres de los campos de la BD                
            ],//fin de la definicion del array con los nombres de los campos de la BD                
            "tabla"             => [                
                'Id',//array no indexado con los titulos a mostrar en la tabla                
                'Nombre',//array no indexado con los titulos a mostrar en la tabla                
                'Descripcion',//array no indexado con los titulos a mostrar en la tabla                
                'slug',//array no indexado con los titulos a mostrar en la tabla                
                'acciones'//array no indexado con los titulos a mostrar en la tabla                
            ], 
            "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla iguales a tabla
            'leer mas'          => 'descripcion',
            'campo titulo'      => 'nombre',          
            "controlador"       => 'Roles', //Desde que controlador se llama                
            "method"            => "index", //metodo del controlador a ejecutar                
            "vista"             => 'BackOffice.vistas.index', //que subvista renderiza                
            "metodo"            => "Tabla de Roles", //descripcion del metodo                
            "titulo"            => "Roles", //titulo h1 de la pagina                
            "singular"          => "Rol", //nombre de la pagina en singular                
            "subtitulo"         => "Roles de la BD", //subtitulo de la pagina                
            "editar"            => "rol.edit", //Links a los distintos metodos del controlador                
            "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador                
            "borrar"            => "rol.delete", //Links a los distintos metodos del controlador                
            "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador                
            'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro                
              
        ];
        return view('BackOffice.central', compact('data', 'clase'));
    }
}
