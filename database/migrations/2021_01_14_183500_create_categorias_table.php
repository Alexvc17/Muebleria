<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();//NOS CREA UNA LLAVE PRIMARIA DE TIPO AUTOINCREMENTAL, SIN SIGNO Y BIG INTEGER
            $table->string('nombreCategoria', 20);
            $table->string('descripcion', 100);
            $table->timestamps();
            //Con este comando creamos una tabla
            //php artisan make:migration create_clientes_table --create=clientes
            //Con este comando migramos solo la tabla actual
            //php artisan migrate --path=database\migrations\2020_12_05_181701_create_categorias_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
