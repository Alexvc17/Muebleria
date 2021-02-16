<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Categorias extends Controller
{
    public function index(){

      
        $categorias = Categoria::all();
        
        return view('inventario.categorias.listado',['categorias' => $categorias]);

    }

}
