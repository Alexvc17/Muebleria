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
        
        //CATALOGO DE  PRODUCTOS
        $productos = DB::table('productos as pro')

        ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
        //select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
        ->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto','pro.cantidadProducto', 'cat.nombreCategoria')
        
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

        //////////////////////////////////////////////
    public function Sala(){

        //Consulta con join
$productos = DB::table('productos as pro')

->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
->where('categoria', '=' , 1)
//select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto', 'cat.nombreCategoria')

//nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
->get(); 
        //procedemos a enviar esa informacion a la vista
return view('inventario.categorias.sala',['productos'=>$productos]);
        
    }

    public function Comedor(){

        $productos = DB::table('productos as pro')

        ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
        ->where('categoria', '=' , 2)
        ->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto', 'cat.nombreCategoria')
        ->get(); 
                
        

        return view('inventario.categorias.comedor',['productos'=>$productos]);
    }

    public function Estudio(){

        $productos = DB::table('productos as pro')

        ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
        ->where('categoria', '=' , 3)
        ->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto', 'cat.nombreCategoria')
        ->get(); 
                
                

        return view('inventario.categorias.estudio',['productos'=>$productos]);
    }

    public function Dormitorio(){

        $productos = DB::table('productos as pro')

        ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
        ->where('categoria', '=' , 4)
        ->select('pro.id','pro.nombreProducto','pro.fotoProducto', 'pro.precioProducto', 'cat.nombreCategoria')
        ->get(); 
                
        
        return view('inventario.categorias.dormitorio',['productos'=>$productos]);
    }


    ////////Registro producto//////////
    
    public function formularioReg(){

        $categorias = Categoria::all();//Aqui consulto todas las categorias que tengo
        return view('inventario.productos.form_registro',compact('categorias'));

    }

    
    public function registrar(Request $request){
        //Aqui se hace el registro de la categoria y productos en la base de datos
        $product = new Producto();
        $product->nombreProducto  = $request->input('nombrePro');
    //nombre de variable, nombre de atributo de tabla, y nombre del input de formulario
        $product->cantidadProducto  = $request->input('cantidadPro');
        $product->precioProducto  = $request->input('precioPro');
        $product->fotoProducto  = $request->input('fotoPro');
        $product->descripcionProducto = $request->input('descPro');
        $product->Color = $request->input('colorPro');
        $product->categoria = $request->input('categoriaPro');
        
        $product->save();
        return redirect()->route('listadoProductos');
        //lo envia a la ruta productos nombrada como listadoProductos
    }
        


    //Edicion de producto
    
    public function form_actualizar($id){

        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('inventario.productos.form_actualizar',compact('producto','categorias'));

    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $product = Producto::findOrFail($id);
        $product->nombreProducto = $request->input('nombrePro');
        $product->cantidadProducto = $request->input('cantidadPro');
        $product->precioProducto = $request->input('precioPro');
        $product->fotoProducto = $request->input('fotoPro');   
        $product->descripcionProducto = $request->input('descPro');  
        $product->Color = $request->input('colorPro');  
        $product->categoria = $request->input('categoriaPro');
        $product->save();
        return redirect()->route('listadoProductos');
    }
    

    //Consulta de producto
    public function form_consulta(){

        
        return view('inventario.productos');


    }

    public function consultar(Request $request){

        $nombre = $request->input('nombrePro');
        $producto = Producto::where('nombreProducto', 'like', $nombre)->first();
        

        if($producto)
            return view('inventario.productos.resultado', compact('producto'));
        else
        return view('inventario.productos.mensaje');
    }

    //Eliminar producto
    public function eliminar($id){

        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('listadoProductos');


    }

    

    public function form($id){

        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('inventario.productos.form_actualizar',compact('producto','categorias'));

    }

    public function actualiza(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $product = Producto::findOrFail($id);
        $product->nombreProducto = $request->input('nombrePro');
        $product->cantidadProducto = $request->input('cantidadPro');
        $product->precioProducto = $request->input('precioPro');
        $product->fotoProducto = $request->input('fotoPro');   
        $product->descripcionProducto = $request->input('descPro');  
        $product->Color = $request->input('colorPro');  
        $product->categoria = $request->input('categoriaPro');
        $product->save();
        return redirect()->route('listadoProductos');
    }
    

}
