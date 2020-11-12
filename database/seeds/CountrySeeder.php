<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'parent_id' => null,
            'nombre'    => 'Perú',
            'descripcion'=> 'Pais',
            'codigo'    => 'PE'
        ]);//1
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Amazonas',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//2
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Áncash',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//3
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Apurímac',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//4
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Arequipa',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//5
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Ayacucho',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//6
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Cajamarca',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//7
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Callao',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//8
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Cusco',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//9
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Huancavelica',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//10
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Huánuco',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//11
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Ica',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//12
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Junín',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//13
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'La Libertad',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//14
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Lambayeque',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//15
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Lima',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//16
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Loreto',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//17
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Madre',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//18
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Moquegua',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//19
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Pasco',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//20
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Piura',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//21
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Puno',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//22
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'San Martín',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//23
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Tacna',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//24
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Tumbes',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//25
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Ucayali',
            'descripcion'=> 'Departamento',
            'codigo'    => 'Peru'
        ]);//26
        //Amazonas
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Bagua',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//27
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Bongará',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//28
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Chachapoyas',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//29
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Condorcanqui',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//30
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Luya',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//31
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Rodríguez de Mendoza',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//32
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Utcubamba',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Amazonas'
        ]);//33
        //Ancash
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Aija',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//34
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Antonio Raimondi',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//35
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Asunción',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//36
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Bolognesi',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//37
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Carhuaz',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//38
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Carlos Fermín Fitzcarrald',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//39
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Casma',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//40
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Corongo',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//41
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Huaraz',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//42
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Huari',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//43
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Huarmey',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//44
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Huaylas',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//45
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Mariscal Luzuriaga',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//46
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Ocros',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//47
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Pallasca',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//48
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Pomabamba',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//49
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Recuay',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//50
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Santa',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//51
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Sihuas',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//52
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Yungay',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Ancash'
        ]);//53
        //Aputimac 4
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Abancay',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//54
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Andahuaylas',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//55
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Antabamba',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//56
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Aymaraes',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//57
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Chincheros',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//58
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Cotabambas',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//59
        Country::create([
            'parent_id' => 4,
            'nombre'    => 'Grau',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Apurimac'
        ]);//60
        //Arequipa
        Country::create([
            'parent_id' =>5,
            'nombre'    => 'Arequipa',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//61
        Country::create([
            'parent_id' =>5,
            'nombre'    => 'Camaná',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//62
        Country::create([
            'parent_id' =>5,
            'nombre'    => 'Caravelí',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//63
        Country::create([
            'parent_id' =>5,
            'nombre'    => 'Castilla',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//64
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'Caylloma',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//65
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'Condesuyos',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//66
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'Islay',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//67
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'La Unión',
            'descripcion'=> 'Provincia',
            'codigo'    => 'Arequipa'
        ]);//68
        // Ayacucho 6
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Huamanga',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//69
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Cangallo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//70
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Huanca Sancos',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//71
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Huanta',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//72
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'La Mar',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//73
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Lucanas',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//74
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Parinacochas',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//75
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Páucar del Sara Sara',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//76
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Sucre',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//77
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Víctor Fajardo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//78
        Country::create([
            'parent_id'     => 6,
            'nombre'        => 'Vilcashuamán',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ayacuco'
        ]);//79
        // Cajamarca
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Cajamarca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//80
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Cajabamba',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//81
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Celendín',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//82
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Chota',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//83
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Contumazá',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//84
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Cutervo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//85
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Hualgayoc',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//86
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Jaén',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//87
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'San Ignacio',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//88
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'San Marcos',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//89
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'San Miguel',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//90
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'San Pablo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//91
        Country::create([
            'parent_id'     => 7,
            'nombre'        => 'Santa Cruz',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cajamarca'
        ]);//92
        //cuzco 8
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Cusco',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//93
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Acomayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//94
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Anta',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//95
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Calca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//96
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Canas',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//97
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Canchis',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//98
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Chumbivilcas',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//99
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Espinar',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//100
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'La Convencion',
            'descripcion'   => 'Provincia',
            'codigo'        => 'CajCusco'
        ]);//101
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Paruro',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//102
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Paucartambo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//103
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Quispicanchi',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//104
        Country::create([
            'parent_id'     => 8,
            'nombre'        => 'Urubamba',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Cusco'
        ]);//105
        //Huancavelica 9
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Huancavelica',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//106
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Acobamba',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//107
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Angaraes',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//108
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Castrovirreyna',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//109
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Tayacaja',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//110
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Huaytara',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//111
        Country::create([
            'parent_id'     => 9,
            'nombre'        => 'Churcampa',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huancavelica'
        ]);//112
        //Huanuco 10
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Huanuco',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//113
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Ambo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//114
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Dos de Mayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//115
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Huamalies',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//116
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Marañon',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//117
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Leoncio Prado',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//118
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Pachitea',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//119
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Puerto Inca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//120
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Huacaybamba',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//121
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Lauricocha',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//122
        Country::create([
            'parent_id'     => 10,
            'nombre'        => 'Yarowilca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Huanuco'
        ]);//123
        // Ica 11
        Country::create([
            'parent_id'     => 11,
            'nombre'        => 'Ica',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ica'
        ]);//124
        Country::create([
            'parent_id'     => 11,
            'nombre'        => 'Chincha',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ica'
        ]);//125
        Country::create([
            'parent_id'     => 11,
            'nombre'        => 'Nazca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ica'
        ]);//126
        Country::create([
            'parent_id'     => 11,
            'nombre'        => 'Pisco',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ica'
        ]);//127
        Country::create([
            'parent_id'     => 11,
            'nombre'        => 'Palpa',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Ica'
        ]);//128
        //Junin 12
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Huancayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//129
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Concepcion',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//130
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Jauja',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//131
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Tarma',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//132
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Yauli',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//133
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Satipo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//134
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Chanchamayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//135
        Country::create([
            'parent_id'     => 12,
            'nombre'        => 'Chupaca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Junin'
        ]);//136
        // La Libertad 13
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Trujillo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//137
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Bolivar',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//138
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Sanchez Carrion',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//139
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Otuzco',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//140
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Pacasmayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//141
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Pataz',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//142
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Santiago de Chuco',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//143
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Ascope',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//144
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Chepen',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//145
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Julcan',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//146
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Gran Chimu',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//147
        Country::create([
            'parent_id'     => 13,
            'nombre'        => 'Viru',
            'descripcion'   => 'Provincia',
            'codigo'        => 'La Libertad'
        ]);//148
        //Lambayeque 14
        Country::create([
            'parent_id'     => 14,
            'nombre'        => 'Chiclayo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lambayeque'
        ]);//149
        Country::create([
            'parent_id'     => 14,
            'nombre'        => 'Ferreñafe',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lambayeque'
        ]);//150
        Country::create([
            'parent_id'     => 14,
            'nombre'        => 'Lambayeque',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lambayeque'
        ]);//151
        //Lima 15
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Lima',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//152
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Cajatambo',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//153
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Canta',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//154
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Cañete',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//155
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Huaura',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//156
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Huarochiri',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//157
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Yauyos',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//158
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Huaral',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//159
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Barranca',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//160
        Country::create([
            'parent_id'     => 16,
            'nombre'        => 'Oyon',
            'descripcion'   => 'Provincia',
            'codigo'        => 'Lima'
        ]);//161


        //distritos de lima por emergencia
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Lima Cercado',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Ancon',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Ate',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Bre?a',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Carabayllo',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Comas',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Chaclacayo',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Chorrillos',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'La Victoria',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'La Molina',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Lince',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Lurigancho',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Lurin',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Magdalena del Mar',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Miraflores',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Pachacamac',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Pueblo Libre',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Pucusana',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Puente Piedra',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Punta Hermosa',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Punta Negra',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Rimac',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Bartolo',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Isidro',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Barranco',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Martin de Porres',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Miguel',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Santa Maria del Mar',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Santa Rosa',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Santiago de Surco',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Surquillo',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Villa Maria del Triunfo',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Jesus Maria',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Independencia',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'El Agustino',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Juan de Miraflores',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Juan de Lurigancho',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Luis',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Cieneguilla',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'San Borja',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Villa El Salvador',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
        Country::create([
            'parent_id'     => 152,
            'nombre'        => 'Los Olivos',
            'descripcion'   => 'Distrito',
            'codigo'        => 'Lima'
        ]);//92
    }

}
























/*
 *

























 *
 * */
