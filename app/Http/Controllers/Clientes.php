<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto; //poner obligatorio esta libreria del modelo *Productos*
use App\Models\Categoria;
use App\Models\Venta;

class Clientes extends Controller
{
    public function index(){
        
        //CATALOGO DE  PRODUCTOS
        $clientes = DB::table('clientes as cli')

        
        //select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
        ->select('cli.id','cli.nombreCliente','cli.apellidoCliente', 'cli.cedulaCliente',
         'cli.direccionCliente', 'cli.telefonoCliente', 'cli.emailCliente')
        
        //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('clientes.visualizar',['clientes'=>$clientes]);
        
        }

        //Edicion de cliente
    
    public function form_actualizar($id){

        $cliente = Cliente::findOrFail($id);
        
        return view('clientes.form_actualizar',compact('cliente'));

    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $client = Cliente::findOrFail($id);
        $client->nombreCliente = $request->input('nombreCli');
        $client->apellidoCliente = $request->input('apellidoCli');
        $client->cedulaCliente = $request->input('cedulaCli');
        $client->direccionCliente = $request->input('direccionCli');   
        $client->telefonoCliente = $request->input('telefonoCli');  
        $client->emailCliente = $request->input('emailCli');  
        $client->save();
        return redirect()->route('listadoClientes');
    }

    ////////////////////REGISTRAR CLIENTE//////////////////

    public function formularioReg(){

        
        return view('clientes.form_registro');

    }
    
    public function registrar(Request $request){
        //Aqui se hace el registro de la categoria y productos en la base de datos
        $client = new Cliente();
        $client->nombreCliente = $request->input('nombreCli');
        $client->apellidoCliente = $request->input('apellidoCli');
        $client->cedulaCliente = $request->input('cedulaCli');
        $client->direccionCliente = $request->input('direccionCli');   
        $client->telefonoCliente = $request->input('telefonoCli');  
        $client->emailCliente = $request->input('emailCli');  
        $client->save();
        return redirect()->route('listadoClientes');
        
  
    }
        
    //////////////////ELIMINAR CLIENTE///////////

    public function eliminar($id){

        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('listaClientes');


    }


    //CONSULTA DE DEUDA
public function form_consulta(){

        
    return view('inventario.ventas.consultar_deuda');


}

public function consultar(Request $request){


    $ced = $request->input('cedulaCli');
    
    $ventas = DB::table('ventas as ven')

        
        ->join('productos as pro', 'ven.id_producto', '=', 'pro.id')
        ->join('clientes as cli', 'ven.id_cliente', '=', 'cli.id')

        ->where('ven.id_cliente','=', $ced)
        ->select('pro.precioProducto')


        
        ->get(); 
                
                
        print_r($ventas->first()->precioProcucto);
        die();
     
        
    
    $cliente = Cliente::where('cedulaCliente', 'like', $ced)->first();
    

    if($cliente)
        return view('inventario.ventas.resultado', compact('cliente','ventas'));
    else
    return view('inventario.productos.mensaje');
}

}
