<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    //
    public function index(){
        $Producto = Producto::all();
        return view('productos', compact('Producto'));
    }
    public function crear(){
        return view('crearProducto');
    }
    public function guardar(Request $request, $CodigoProducto){
        $Producto = Producto::find($CodigoProducto);
        $Producto->CodigoProducto = $request->input('CodigoProducto');
        $Producto->Nombre = $request->input('Nombre');
        $Producto->Nombre = $request->input('FechaVenta');
        $Producto->Precio = $request->input('Precio');
        $Producto->Stock = $request->input('Stock');

        $Producto->save();
        return redirect()->route('productos.index');
    }
    public function comprar($CodigoProducto){
        $Producto = Producto::find($CodigoProducto);
        // $CantidadProducto->Cantidad = $request->input('Cantidad');
        return view('crearVenta', compact('Producto'));
    }
}
