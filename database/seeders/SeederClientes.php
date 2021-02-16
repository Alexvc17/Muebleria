<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederClientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([

            'nombreCliente' => 'Alberto', 
            'apellidoCliente' => 'Caicedo', 
            'cedulaCliente' => '1085337652',
            'direccionCliente' => 'calle 8 #21b',
            'telefonoCliente' => '7323129',
            'emailCliente' => 'albe@gmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Ingrid', 
            'apellidoCliente' => 'Torres', 
            'cedulaCliente' => '1082357152',
            'direccionCliente' => 'calle 21 #4a',
            'telefonoCliente' => '7205511',
            'emailCliente' => 'ingridt@gmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Jorge', 
            'apellidoCliente' => 'Marques', 
            'cedulaCliente' => '1025117002',
            'direccionCliente' => 'calle 11 #3c',
            'telefonoCliente' => '7202091',
            'emailCliente' => 'jorgem@outlook.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Sara', 
            'apellidoCliente' => 'Muñoz', 
            'cedulaCliente' => '1020415399',
            'direccionCliente' => 'calle 5 #5c',
            'telefonoCliente' => '7114233',
            'emailCliente' => 'saram@hotmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Alba', 
            'apellidoCliente' => 'Rosales', 
            'cedulaCliente' => '10985448722',
            'direccionCliente' => 'calle 3 #7a',
            'telefonoCliente' => '7209791',
            'emailCliente' => 'albar@yahoo.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Felipe', 
            'apellidoCliente' => 'Velasco', 
            'cedulaCliente' => '1087336411',
            'direccionCliente' => 'calle 2 #30a',
            'telefonoCliente' => '7440911',
            'emailCliente' => 'felipev@gmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Daniel', 
            'apellidoCliente' => 'Cadena', 
            'cedulaCliente' => '1099442009',
            'direccionCliente' => 'calle 6 #88a',
            'telefonoCliente' => '7894401',
            'emailCliente' => 'danielc@hotmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Jaime', 
            'apellidoCliente' => 'Moran', 
            'cedulaCliente' => '1085844650',
            'direccionCliente' => 'calle 15 #6d',
            'telefonoCliente' => '7209779',
            'emailCliente' => 'jaimemo@gmail.com',
         ]);

         DB::table('clientes')->insert([

            'nombreCliente' => 'Jennifer', 
            'apellidoCliente' => 'Ruano', 
            'cedulaCliente' => '1084332122',
            'direccionCliente' => 'calle 7 #10a',
            'telefonoCliente' => '7990211',
            'emailCliente' => 'jennir@yahoo.com',
         ]);

         

    }
}
