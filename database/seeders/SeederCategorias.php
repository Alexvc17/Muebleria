<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [

                'nombreCategoria' => 'Sala', 
                'descripcion' => 'Sofas y Mesas Para Sala', 
            ],

            [

                'nombreCategoria' => 'Comedor', 
                'descripcion' => 'Juegos de comedor, Mesas y Sillas', 
            ],

            [

                'nombreCategoria' => 'Estudio', 
                'descripcion' => 'Escritorios, Sillas y Bibliotecas', 
            ],

            [

                'nombreCategoria' => 'Dormitorio', 
                'descripcion' => 'Colchones, Camas y Base Camas, Muebles Dormitorio', 
            ],


        ];

        DB::table('categorias')->insert($data);

    }
    
}
