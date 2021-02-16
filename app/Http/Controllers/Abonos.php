<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto; //poner obligatorio esta libreria del modelo *Productos*
use App\Models\Categoria;
use App\Models\Venta;
use App\Models\Pago;

class Abonos extends Controller
{
    //Consulta de endeudamiento
    public function form_abono(){

        
        //return view('inventario.abono.consultar');
        return view('inventario.ventas.consultar_deuda');


    }

    public function consultar(Request $request){

        $ced = $request->input('cedulaCli');
    
        $clientes = DB::table('clientes as cli')
    
    
            ->where('cli.cedulaCliente','=', $ced)
            ->select('cli.id')
    
    
            
            ->get(); 
        
        $pagos = DB::table('pagos as pa')
    
    
            ->where('pa.id_cliente','=', $clientes->first()->id)
            ->select('pa.total')
    
    
            
            ->get(); 
        
        

                    
            
            
        
        $cliente = Cliente::where('cedulaCliente', 'like', $ced)->first();
    
        


        //$nombre = $request->input('cedulaCli');
       // $cliente = Cliente::where('cedulaCliente', 'like', $nombre)->first();
        

        if($pagos)
            //return view('inventario.abono.resultado',['pagos'=>$pagos],compact('cliente'));
            return view('inventario.ventas.resultado',['pagos'=>$pagos],compact('cliente'));
            
        else
        return view('inventario.productos.mensaje');
    }



    public function paz_salvo($total){

      $tot = $total;
            
            return view('inventario.ventas.paz_salvo',compact('tot'));
    
    
    }




    //Consulta de abono
    public function form_abono2(){

        
        //return view('inventario.abono.consultar');
        return view('inventario.abono.consultar');


    }

    public function consultar2(Request $request){

        $ced = $request->input('cedulaCli');

        $mon = $request->input('monto');     
        
        
    

        ///////////////////////////////////////////////////
        $clientes = DB::table('clientes as cli')
    
    
            ->where('cli.cedulaCliente','=', $ced)
            ->select('cli.id')
    
    
            
            ->get(); 
        
        $pagos = DB::table('pagos as pa')
    
    
            ->where('pa.id_cliente','=', $clientes->first()->id)
            ->select('pa.total')
    
    
            
            ->get(); 
        ////////////////////////////////////////////////


$actua = $pagos->first()->total - $mon;

    //este metodo permite buscar el atributo por el identificador *findOrFail*
    $pagos = Pago::findOrFail($clientes->first()->id);
    $pagos->total = $actua;

    
    $pagos->save();


print_r($actua);
die();


    }

        
    public function abonar($cedulaCliente){
        

        $cedCli = $cedulaCliente;
        

        return view('inventario.abono.abonar',compact('cedCli'));
    }











///////////////////////////////////ACTUALIZA PAGO/////////////////////////////////////////////
    public function consultar3(Request $request){

        $ced = $request->input('cedulaCli');

        $mon = $request->input('monto');     
        
        
    

        ///////////////////////////////////////////////////
        $clientes = DB::table('clientes as cli')
    
    
            ->where('cli.cedulaCliente','=', $ced)
            ->select('cli.id')
    
    
            
            ->get(); 
        
        $pagos = DB::table('pagos as pa')
    
    
            ->where('pa.id_cliente','=', $clientes->first()->id)
            ->select('pa.total')
    
    
            
            ->get(); 
        ////////////////////////////////////////////////


        $actua = $pagos->first()->total - $mon;

        
        
        $cliente = Cliente::where('cedulaCliente', 'like', $ced)->first();
    
        


        //$nombre = $request->input('cedulaCli');
       // $cliente = Cliente::where('cedulaCliente', 'like', $nombre)->first();
        

      
    }

     public function paz_so($total){

      $tot = $total;
            
            return view('inventario.ventas.paz_salvo',compact('tot'));
    
    
    }

    
} 
