<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederVentas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        


        DB::table('ventas')->insert([

            'id_factura' => 001,
            'fecha' => '2021-1-4', 
            'modo_pago' => 'Credito',
            'num_cuotas' => 3,
            'cantidad' => 1,
            
            'id_cliente' => '2',
            'id_producto' => '1001',
        ]);

        DB::table('ventas')->insert([

            'id_factura' => 002,
            'fecha' => '2021-1-6', 
            'modo_pago' => 'Contado',
            'num_cuotas' => 2,
            'cantidad' => 2,
            
            'id_cliente' => '4',
            'id_producto' => '1003',
        ]);

        DB::table('ventas')->insert([

            'id_factura' => 003,
            'fecha' => '2021-1-6', 
            'modo_pago' => 'Contado',
            'num_cuotas' => 4,
            'cantidad' => 1,
            
            'id_cliente' => '1',
            'id_producto' => '1002',
        ]);

        DB::table('ventas')->insert([

            'id_factura' => 004,
            'fecha' => '2021-1-4', 
            'modo_pago' => 'Contado',
            'num_cuotas' => 3,
            'cantidad' => 1,
            
            'id_cliente' => '3',
            'id_producto' => '1004',
        ]);










    }
}
