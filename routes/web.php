<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('producto.crear');
Route::post('/productos/guardar', [ProductoController::class, 'guardar'])->name('producto.guardar');
Route::get('/productos/comprar/{CodigoProducto}', [ProductoController::class, 'comprar'])->name('producto.comprar');

Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::get('/ventas/crear', [VentaController::class, 'crear'])->name('ventas.crear');
Route::post('/ventas/guardar/{CodigoProducto}', [VentaController::class, 'guardar'])->name('venta.guardar');