<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;

class VentaController extends Controller
{
    //
    public function index(){
        $Ventas = Venta::all();
        return view('ventas',compact('Ventas'));
    }
    public function crear(){
        $Producto = Producto::all();
        return view('crearVenta', compact('Producto'));
    }
    public function guardar(Request $request, $CodigoProducto){
        $Producto = Producto::find($CodigoProducto);
        $Producto->Stock = $Producto->Stock-$request->input('Cantidad');
        $Venta = new Venta();
        $Venta->FechaVenta = $request->input('Fecha');
        $Venta->CodigoProducto = $request->input('CodigoProducto');
        $Venta->Cantidad = $request->input('Cantidad');
        
        $Venta->Subtotal = $request->input('Precio')*$request->input('Cantidad');
        $Venta->ISV = $Venta->Subtotal*0.15;
        $Venta->Total = $Venta->Subtotal+$Venta->ISV;
        $Producto->update();
        $Venta->save();
        return redirect()->route('ventas.index');
    }
}
