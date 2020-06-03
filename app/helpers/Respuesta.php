<?php
    $respuesta = [
        'data'=>[
            'tipe' => 'tipo de recurso', //obligatorio
            'id' => 'string',//obligatorio
            'attributes'=>[
                //Atributos del recurso
            ],
            'relationships'=>[
                //Relaciones del Recurso
            ],
            'links'=>[
                'self'=>'el link de este mismo recurso'
            ],
            'meta'=>[//Info Adicional
                'message'=>'mensaje '
            ],
        ],//si es Correcta
        'errors'=>[
            'status'=>'Codigo de respuesta',
            'title'=>'titulo del error',
            'detail'=>'el mensaje de error',
            'source'=>[
                    'pointer'=>'url de donde apunta el error'
                ]
            ],//si es erronea
        'meta'=>[//Info Adicional
            'message'=>'mensaje '
        ],
        'included'=>[/*Llamadas a los otros recursos relacionados de ser preciso*/],
        'Links'=>[/*Paginacion se inclulle con info de meta*/],
        'jsonapi'=>[
            'version'=>'1.0'
        ]
        ];
