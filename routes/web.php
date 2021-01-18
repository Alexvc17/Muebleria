<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Inventario\Categorias;
use App\Http\Controllers\Inventario\Productos;

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



/////////Ruta Categorias//////////
Route::get('categorias', [Categorias::class, 'index'])->name('listadoCategorias');


/////////Ruta Productos//////////
Route::get('productos',[Productos::class, 'index'])->name('listadoProductos');

////// Detalles del productp ////////
Route::get('productos/detalles/{id}', [Productos::class, 'detalle'])->name('detalleProducto');