<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Inventario\Categorias;
use App\Http\Controllers\Inventario\Productos;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Ventas;
use App\Http\Controllers\Abonos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Informacion, Rutas inicio de la pagina ,somos y contacto

Route::get('/',[Informacion::class, 'index']);

Route::get('informacion/somos',[Informacion::class, 'somos']);

Route::get('informacion/contacto',[Informacion::class, 'contacto']);
/////////////////////////////////////////////////

//(Ruta cuando ingreso el usuario)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



/////////Categoria Sala//////////
Route::get('categoria-sala', [Productos::class, 'Sala'])->name('ProductoSala');
/////////Categoria Comedor//////////
Route::get('categoria-comedor', [Productos::class, 'Comedor'])->name('ProductosComedor');
/////////Categoria Estudio//////////
Route::get('categoria-estudio', [Productos::class, 'Estudio'])->name('ProductosEstudio');
/////////Categoria Dormitorio//////////
Route::get('categoria-dormitorio', [Productos::class, 'Dormitorio'])->name('ProductosDormitorio');


///////////////////////////Ruta Productos////////////////////////////////77
Route::get('productos',[Productos::class, 'index'])->name('listadoProductos');

////// Detalles del productp ////////
Route::get('productos/detalles/{id}', [Productos::class, 'detalle'])->name('detalleProducto');

////Registro Producto///////
Route::get('productos/registro', [Productos::class, 'formularioReg'])->name('registroPro');
Route::post('productos/registro', [Productos::class, 'registrar'])->name('registrado');

//Edicion y actualizacion de producto
Route::get('productos/actualizar/{id}', [Productos::class, 'form_actualizar'])
->name('form_actualizarProducto');
Route::post('productos/actualizar/{id}', [Productos::class, 'actualizar'])
->name('actualizar_producto'); 

//consulta de productos
Route::get('productos/consulta', [Productos::class, 'form_consulta'])
->name('form_consultaProducto');
Route::post('productos/consulta', [Productos::class, 'consultar'])
->name('consulta_productos');

//Eliminar producto
Route::get('productos/eliminar/{id}', [Productos::class, 'eliminar'])
->name('eliminar_producto');

/////////////////////////////Listar Clientes/////////////////////
Route::get('clientes/visualizar',[Clientes::class, 'index'])->name('listadoClientes');
//Modificar clientes
Route::get('clientes/actualizar/{id}', [Clientes::class, 'form_actualizar'])->name('form_actualizarClientes');
Route::post('clientes/actualizar/{id}', [Clientes::class, 'actualizar'])->name('actualizar_cliente');
//Eliminar cliente
Route::get('clientes/eliminar/{id}', [Clientes::class, 'eliminar'])
->name('eliminar_cliente');
//Registrar Cliente
Route::get('clientes/registro', [Clientes::class, 'formularioReg'])->name('registroCli');
Route::post('clientes/registro', [Clientes::class, 'registrar'])->name('registrado');

/// Registrar Ventas ///
Route::get('ventas/registro', [Ventas::class, 'registroVentas'])->name('registroVen');
Route::post('ventas/registro', [Ventas::class, 'registrar'])->name('registro');

Route::get('ventas/mostrar', [Ventas::class, 'Ventas']);


/////////////////////////////Listar Ventas/////////////////////
Route::get('ventas/visualizar',[Ventas::class, 'index'])->name('listadoVentas');

/////////Consulta de Productos
Route::get('deuda/consultar', [Clientes::class, 'form_consulta'])
->name('form_consultaDeuda');
Route::post('deuda/consultar', [Clientes::class, 'consultar'])
->name('consulta_deuda');


////////Consultar deuda///////////////
Route::get('abono/consulta', [Abonos::class, 'form_abono'])
->name('form_consultaAbono');
Route::post('abono/consulta', [Abonos::class, 'consultar'])
->name('consulta_abono');


Route::get('paz_salvo/{total}',[Abonos::class, 'paz_salvo'])->name('Obtener_paz_salvo');


///////Consultar abono///////
Route::get('abono/consulta', [Abonos::class, 'form_abono2'])
->name('form_consultaAbono');
Route::post('abono/consulta', [Abonos::class, 'consultar2'])
->name('consulta_abono');

Route::get('abono/realizar_abono/{cedulaCliente}', [Abonos::class, 'abonar'])
->name('realizar_abono');



//Route::post('actualizar_pago/{cedulaCliente}', [Abonos::class, 'actu_p'])
//->name('actualiza_pago');

