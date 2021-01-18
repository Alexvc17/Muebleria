<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class Categorias extends Controller
{
    public function index(){

        //Consulta con Query Builder
        //$categorias = DB::table('categorias')->get();

        //Consula atraves de modelos de datos
        $categorias = Categoria::all();
         /*nombre de variable = nombre del modelo
        Me obiene todos los registros y todos los atributos del modelo categorias
        y este a su ves  apunta a la tabla categorias*/
         
        //Aqui se hacen las consultas: CON WHERE USANDO MODELOS
        //$categorias = Categoria::where('descripcion','like','L%')->get();
        //para solo encontrar el primero que encuentre usar ->first();
        return view('inventario.categorias.listado',['categorias' => $categorias]);

    }
}
