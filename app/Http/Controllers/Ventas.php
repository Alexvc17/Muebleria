<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;

class Ventas extends Controller
{

    public function index(){
        
        $ventas = DB::table('ventas as ven')

        ->join('clientes as cli', 'ven.id_cliente', '=', 'cli.id')

        ->join('productos as pro', 'ven.id_producto', '=', 'pro.id')
        
        ->select('ven.id_factura','ven.fecha','ven.modo_pago', 'ven.num_cuotas','ven.cantidad', 'cli.nombreCliente','pro.nombreProducto')
        
        //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('inventario.ventas.visualizar_ventas',['ventas'=>$ventas]);
        
        
        
    }


    
    public function registroVentas(){

        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('inventario.ventas.form_registro',compact('clientes','productos'));

    }

    
    public function registrar(Request $request){
        //Aqui se hace el registro de la categoria y productos en la base de datos
        $vent = new Venta();
        
        
        $vent->fecha  = $request->input('fechaVen');
    //nombre de variable, nombre de atributo de tabla, y nombre del input de formulario
        $vent->modo_pago  = $request->input('metodopagoVen');
        $vent->num_cuotas  = $request->input('cuotasVen');
        $vent->cantidad  = $request->input('cantidadPro');



        $vent->id_cliente  = $request->input('cliente_id');
        $vent->id_producto = $request->input('producto_id');
        

        $vent->save();

        
        $productos = DB::table('productos as pro')      
        
        
        ->select('pro.id','pro.cantidadProducto') 
        

       ->where('pro.id','=',$vent->id_producto)->get(); 
        
        

        $var = $productos->first()->cantidadProducto - $vent->cantidad;

        
        

        $actua = Producto::findOrFail($vent->id_producto);

        $actua->cantidadProducto = $var;

        $actua->save();

        
        return redirect()->route('listadoProductos');
       
        //lo envia a la ruta productos nombrada como listadoProductos
    }


   



}
