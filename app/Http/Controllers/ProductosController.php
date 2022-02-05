<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Movimiento;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $productos = Producto::all();
        return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("productos.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return view("productos.insert");
        $producto = new Producto;
        $producto->nombreProducto = $request->nombreProducto;
        $producto->precioProducto = $request->precio;
        $producto->proveedor = $request->proveedor;
        $producto->unidadesEnExistencia = $request->unidadesEnExistencia;
        $producto->paisOrigen = $request->paisOrigen;
        $producto->save();
        return redirect("/productosShow");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $productos = Producto::all();
        return view("productos.show",compact("productos"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view("productos.edit",compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //return view("productos.update");
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        //return view("/productos.index");
        return redirect("/productosShow");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //return view("productos.delete");
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");
    }

    public function masProducto(Request $request,$id)
    {
        $producto = Producto::findOrFail($id);        

        $producto->unidadesEnExistencia += $request->unidadesEnExistencia;

        $producto->movimientos()->attach(1,['fecha'=>$request->fechaMovimiento,'justificacion'=>$request->justificacion,'cantidad'=>$request->unidadesEnExistencia]);

        //actualizamos la tabla producto con el nuevo valor de unidades en existencia 
        $producto->save();//guardamos la cantidad que a entrado al inventario de dicho producto
        
        return redirect("/productosShow");
        
    }
    public function addCantidad($id)
    {
        
        $producto = Producto::findOrFail($id);
        return view("productos.nuevaVistaSuma",compact("producto"));

    }

    public function invocarVistaSuma(){

        $productos = Producto::all();
        return view("productos.sumarProducto",compact("productos"));

    }

    public function menosProducto(Request $request,$id)
    {
        $producto = Producto::findOrFail($id);        

        $producto->unidadesEnExistencia -= $request->unidadesEnExistencia;

        $producto->movimientos()->attach(2,['fecha'=>$request->fechaMovimiento,'justificacion'=>$request->justificacion,'cantidad'=>$request->unidadesEnExistencia]);

        //actualizamos la tabla producto con el nuevo valor de unidades en existencia 
        $producto->save();//guardamos la cantidad que a entrado al inventario de dicho producto
        
        return redirect("/productosShow");
        
    }
    public function restarCantidad($id)
    {
        
        $producto = Producto::findOrFail($id);
        return view("productos.nuevaVistaResta",compact("producto"));

    }


}
