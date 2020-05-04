<?php


    function creador()
    {
        $clase =[
            "bd"                => [], //Campos de la BD
            "tabla"             => [], //Campos de la tabla fisica
            "campos"            => null, //cantidad de campos a mostrar en la tabla de ser tabla
            'leer mas'          => null, //Campo Para Mostrar el Leer Mas desde Fuera del Foreach de las vistas
            'campo titulo'      => null, // Campo de la Nombracion de la propiuedad en caso esta no sea title
            "controlador"       => null, //Desde que controlador se llama
            "modelo"            => null, //A que Modelo Pertenece
            "method"            => null, //metodo del controlador a ejecutar
            "vista"             => null, //que subvista renderiza
            "metodo"            => null, //descripcion del metodo
            "titulo"            => null, //titulo h1 de la pagina
            "singular"          => null, //nombre de la pagina en singular
            "subtitulo"         => null, //subtitulo de la pagina
            "editar"            => null, //Links a los distintos metodos del controlador
            "restaurar"         => null, //Links a los distintos metodos del controlador
            "borrar"            => null, //Links a los distintos metodos del controlador
            "eliminar"          => null, //Links a los distintos metodos del controlador
            "ver"               => null, //Links a los distintos metodos del controlador
            'papelera'          => null, //definiocion si es un metodo de reciclaje o un metodo puro
            //Indices de formulario de Formulario
            "verbo"             => null, //Vervo del Formulario
            "boton"             => null, //nombre del submit
            "campos_form"       => [ //en caso sea Formulario
                // "select"        => [ //tipo de Campo
                //     "existe" => null, //si existe o no
                //     "cantidad" => null, //cantidad en el Formulario
                //     0 => [   definicion de cada tipo
                //         "name" => "rol", //Nombre
                //         "tag" => "nombre", //Etiqueta Del Mismo
                //         "option" => [ //Opciones Personalizadas
                //             "cliente",
                //             "editor",
                //             "personal",
                //             "dueño",
                //             "admin",
                //             ],
                //         ],
                //     ],
                // ]
            ]
        ];
        return $clase;
    }
    function RendRol($ruta)
    {
        $clase = creador();

        $clase['controlador'] = 'Roles';
        $clase['modelo'] = 'rol';
        $clase['titulo'] = 'Roles';
        $clase['singular'] = 'Rol';
        if($ruta == 'rol.index' || $ruta == 'rol.trash'){
            $clase['vista'] = 'BackOffice.vistas.tabla';
            $clase['bd'][0] =  'id';
            $clase['bd'][1] =  'nombre';
            $clase['bd'][2] =  'descripcion';
            $clase['bd'][3] =  'slug';
            $clase['bd'][4] =  'created_at';
            $clase['bd'][5] =  'updated_at';
            $clase['bd'][6] =  'deleted_at';
            $clase['tabla'][0] = 'Id';
            $clase['tabla'][1] = 'Nombre';
            $clase['tabla'][2] = 'Descripcion';
            $clase['tabla'][3] = 'Slug';
            $clase['tabla'][4] = 'Acciones';
            $clase['campos'] = 5;
            $clase['leer mas'] = 'descripcion';
            $clase['campo titulo'] = 'nombre';
            $clase['metodo'] = 'Tabla de Roles';
            $clase['subtitulo'] = 'Roles de la BD';
            $clase['editar'] = 'rol.edit';
            $clase['ver'] = 'rol.show';
            $clase['restaurar'] = 'rol.restore';
            $clase['borrar'] = 'rol.delete';
            $clase['eliminar'] = 'rol.destroy';
            if($ruta == 'rol.trash'){
                $clase['method'] = 'papelera';
                $clase['papelera'] = 'si';
            }else{
                $clase['method'] = 'index';
                $clase['papelera'] = 'no';
            }
        }elseif($ruta == 'rol.create' || $ruta == 'rol.edit'){
            $clase['vista'] = 'BackOffice.vistas.form2';
            $clase['campos_form'] = [
                'input' =>[
                    'existe' => true,
                    'cantidad' => 4,
                    0 =>[
                        'nombre'  => 'slug',
                        'columnas' => 'col-md-12',
                        'tag' => 'input',
                        'attr' => [
                            'tipe' => 'hidden',
                            'value' => true,
                            'name' => 'slug',
                            'required' => true,
                            'checked' => false,
                            'disabled' =>false,
                            'max' => false,
                            'min' => false,
                            'maxlength' => '5',
                            'pattern' => false,
                            'readonly' => false,
                            'size' => false,
                            'steps' => false,
                            'onclick' => false
                        ]
                    ],
                    1 =>[
                        'nombre'  => 'Nombre del Rol',
                        'columnas' => 'col-md-12',
                        'tag' => 'input',
                        'attr' => [
                            'tipe' => 'text',
                            'value' => true,
                            'name' => 'nombre',
                            'required' => true,
                            'checked' => false,
                            'disabled' =>false,
                            'max' => false,
                            'min' => false,
                            'maxlength' => '5',
                            'pattern' => false,
                            'readonly' => false,
                            'size' => false,
                            'steps' => false,
                            'onclick' => false
                        ]
                    ],
                    2 =>[
                        'nombre'  => 'Descripcion del Rol',
                        'columnas' => 'col-md-12',
                        'tag' => 'textarea',
                        'attr' => [
                            'tipe' => 'textarea',
                            'value' => true,
                            'name' => 'descripcion',
                            'required' => true,
                            'col'   => 30,
                            'rows' => 10,
                            'max' => false,
                            'min' => false,
                            'maxlength' => '5',
                            'pattern' => false,
                            'readonly' => false,
                            'size' => false,
                            'steps' => false,
                            'onclick' => false
                        ]
                    ],
                    3 =>[
                        'nombre'  => 'submit',
                        'columnas' => 'col-md-12',
                        'tag' => 'input',
                        'attr' => [
                            'tipe' => 'submit',
                            'value' => true,
                            'name' => 'enviar',
                            'required' => true,
                            'checked' => false,
                            'disabled' =>false,
                            'max' => false,
                            'min' => false,
                            'maxlength' => false,
                            'pattern' => false,
                            'readonly' => false,
                            'size' => false,
                            'steps' => false,
                            'onclick' => false
                        ]
                    ]
                ]

            ];
            if($ruta == 'rol.create'){
                $clase['metodo'] = 'Creacion de Roles';
                $clase['method'] = 'create';
                $clase['subtitulo'] = 'Creemos un Rol';
                $clase['verbo'] = 'post';
                $clase['ruta'] = 'rol.store';
                $clase['boton'] = 'Crear un rol';
            }else{
                $clase['metodo'] = 'Editar un Rol';
                $clase['method'] = 'edit';
                $clase['subtitulo'] = 'Editemos El Rol';
                $clase['verbo'] = 'post';
                $clase['ruta'] = 'rol.update';
                $clase['boton'] = 'Edita el rol';
                $clase['campos_form']['input'][0]['attr']['tipe'] = 'text';
                $clase['campos_form']['input'][0]['columnas'] = 'col-md-6';
                $clase['campos_form']['input'][1]['columnas'] = 'col-md-6';
            }

        }else{
            $clase['vista'] = 'BackOffice.vistas.single';
            $clase['metodo'] = 'Perfil de Roles';
            $clase['method'] = 'show';
            $clase['subtitulo'] = 'Perfil del Rol';
            $clase['bd'][0] =  'id';
            $clase['bd'][1] =  'nombre';
            $clase['bd'][2] =  'descripcion';
            $clase['bd'][3] =  'slug';
            $clase['bd'][4] =  'created_at';
            $clase['bd'][5] =  'updated_at';
            $clase['bd'][6] =  'deleted_at';
            $clase['tabla'][0] = 'Id';
            $clase['tabla'][1] = 'Nombre';
            $clase['tabla'][2] = 'Descripcion';
            $clase['tabla'][3] = 'Slug';
        }

        return $clase;
    }

    function RendPerm($ruta)
    {
        $clase = creador();

        if($ruta == 'permisos.index' || $ruta == 'permisos.trash'){
            $clase['bd'][0] =  'id';
            $clase['bd'][1] =  'nombre';
            $clase['bd'][2] =  'descripcion';
            $clase['bd'][3] =  'slug';
            $clase['bd'][4] =  'created_at';
            $clase['bd'][5] =  'updated_at';
            $clase['bd'][6] =  'deleted_at';
            $clase['tabla'][0] = 'Id';
            $clase['tabla'][1] = 'Nombre';
            $clase['tabla'][2] = 'Descripcion';
            $clase['tabla'][3] = 'Slug';
            $clase['tabla'][4] = 'Acciones';
            $clase['campos'] = 5;
            $clase['leer mas'] = 'descripcion';
            $clase['campo titulo'] = 'nombre';
            $clase['controlador'] = 'Permisos';
            $clase['modelo'] = 'permiso';
            $clase['vista'] = 'BackOffice.vistas.tabla';
            $clase['metodo'] = 'Tabla de Permisos';
            $clase['titulo'] = 'Permisos';
            $clase['singular'] = 'Permiso';
            $clase['subtitulo'] = 'Permiso de la BD';
            $clase['editar'] = 'permisos.edit';
            $clase['restaurar'] = 'permisos.restore';
            $clase['borrar'] = 'permisos.destroy';
            $clase['eliminar'] = 'permisos.destroy';
            if($ruta == 'permisos.trash'){
                $clase['method'] = 'papelera';
                $clase['papelera'] = 'si';
            }else{
                $clase['method'] = 'index';
                $clase['papelera'] = 'no';
            }
        }
        return $clase;
    }

    function RendUsers($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){


        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }

    function RendAva($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){
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
                "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla
                'leer mas'          => 'descripcion',
                'campo titulo'      => 'nombre',
                "controlador"       => 'Roles', //Desde que controlador se llama
                "method"            => "index", //metodo del controlador a ejecutar
                "vista"             => 'BackOffice.vistas.tabla2', //que subvista renderiza
                "metodo"            => "Tabla de Roles", //descripcion del metodo
                "titulo"            => "Roles", //titulo h1 de la pagina
                "singular"          => "Rol", //nombre de la pagina en singular
                "subtitulo"         => "Roles de la BD", //subtitulo de la pagina
                "editar"            => "rol.masteredit", //Links a los distintos metodos del controlador
                "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador
                "borrar"            => "rol.delete", //Links a los distintos metodos del controlador
                "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador
                'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro

            ];
            return $clase;
        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }

    function RendDir($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){
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
                "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla
                'leer mas'          => 'descripcion',
                'campo titulo'      => 'nombre',
                "controlador"       => 'Roles', //Desde que controlador se llama
                "method"            => "index", //metodo del controlador a ejecutar
                "vista"             => 'BackOffice.vistas.tabla2', //que subvista renderiza
                "metodo"            => "Tabla de Roles", //descripcion del metodo
                "titulo"            => "Roles", //titulo h1 de la pagina
                "singular"          => "Rol", //nombre de la pagina en singular
                "subtitulo"         => "Roles de la BD", //subtitulo de la pagina
                "editar"            => "rol.masteredit", //Links a los distintos metodos del controlador
                "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador
                "borrar"            => "rol.delete", //Links a los distintos metodos del controlador
                "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador
                'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro

            ];
            return $clase;
        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }

    function RendCli($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){
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
                "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla
                'leer mas'          => 'descripcion',
                'campo titulo'      => 'nombre',
                "controlador"       => 'Roles', //Desde que controlador se llama
                "method"            => "index", //metodo del controlador a ejecutar
                "vista"             => 'BackOffice.vistas.tabla2', //que subvista renderiza
                "metodo"            => "Tabla de Roles", //descripcion del metodo
                "titulo"            => "Roles", //titulo h1 de la pagina
                "singular"          => "Rol", //nombre de la pagina en singular
                "subtitulo"         => "Roles de la BD", //subtitulo de la pagina
                "editar"            => "rol.masteredit", //Links a los distintos metodos del controlador
                "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador
                "borrar"            => "rol.delete", //Links a los distintos metodos del controlador
                "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador
                'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro

            ];
            return $clase;
        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }

    function RendCliNat($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){
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
                "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla
                'leer mas'          => 'descripcion',
                'campo titulo'      => 'nombre',
                "controlador"       => 'Roles', //Desde que controlador se llama
                "method"            => "index", //metodo del controlador a ejecutar
                "vista"             => 'BackOffice.vistas.tabla2', //que subvista renderiza
                "metodo"            => "Tabla de Roles", //descripcion del metodo
                "titulo"            => "Roles", //titulo h1 de la pagina
                "singular"          => "Rol", //nombre de la pagina en singular
                "subtitulo"         => "Roles de la BD", //subtitulo de la pagina
                "editar"            => "rol.masteredit", //Links a los distintos metodos del controlador
                "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador
                "borrar"            => "rol.delete", //Links a los distintos metodos del controlador
                "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador
                'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro

            ];
            return $clase;
        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }

    function RendCliJur($ruta)
    {
        if(Request()->routeis($ruta) == 'rol.index'){
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
                "campos"            => 5, //cantidad de campos a mostrar en la tabla de ser tabla
                'leer mas'          => 'descripcion',
                'campo titulo'      => 'nombre',
                "controlador"       => 'Roles', //Desde que controlador se llama
                "method"            => "index", //metodo del controlador a ejecutar
                "vista"             => 'BackOffice.vistas.tabla2', //que subvista renderiza
                "metodo"            => "Tabla de Roles", //descripcion del metodo
                "titulo"            => "Roles", //titulo h1 de la pagina
                "singular"          => "Rol", //nombre de la pagina en singular
                "subtitulo"         => "Roles de la BD", //subtitulo de la pagina
                "editar"            => "rol.masteredit", //Links a los distintos metodos del controlador
                "restaurar"         => "rol.restore", //Links a los distintos metodos del controlador
                "borrar"            => "rol.delete", //Links a los distintos metodos del controlador
                "eliminar"          => "rol.destroy", //Links a los distintos metodos del controlador
                'papelera'          => 'no',//definiocion si es un metodo de reciclaje o un metodo puro

            ];
            return $clase;
        }

        if(request()->routeis($ruta) == 'rol.create'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.show'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.edit'){
            $clase = [];
        }

        if(request()->routeis($ruta) == 'rol.restore'){
            $clase = [];
        }
        return $clase;
    }
