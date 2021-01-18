<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto; //poner obligatorio esta libreria del modelo *Productos*
use App\Models\Categoria;

class Productos extends Controller
{
    public function index(){
        /*Aqui y de esta manera se empieza a hacer la consulta
        
                
        
        */        
        
        /* Para obtener un solo registro video !!!°!"#clase apartir del minuto 55:00
        $productos = DB::table('productos')->first(); 
        return view('inventario.resultado', ['p'=>$product]);)
        */
        
        /*Para consultar solamente los productos cuya categoria es 1
        
        
        $productos = DB::table('productos') 
                ->where('categoria', '=' , 1)->get();
        
        y cuya cantidad sea mayor a 50
        
                ->where('cantidadProducto', '>' , 50)->get();
        
        Ó que el precio sea <= 10000
        
                ->where('precioProducto', '>' , 10000)->get();
        
        y que solamente imprima el id de ese producto
           
        
                ->value('id');
        
        
                return view('inventario.productos',['productos'=>$productos]);
        */
        
        //Consulta con join
        $productos = DB::table('productos as pro')
        
        //select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
        ->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto')
        
        //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('inventario.productos',['productos'=>$productos]);
        
        }

        public function detalle($id){
                //este metodo permite buscar el atributo por el identificador *findOrFail*
                $producto = Producto::findOrFail($id);
                
                return view('inventario.productos.detalle',compact('producto'));
        
        
            }
        
}
