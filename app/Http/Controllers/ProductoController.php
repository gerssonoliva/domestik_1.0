<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos = Producto::all();
        $productos = Producto::select('productos')
                    ->join('proveedores', 'proveedores.id', '=', 'productos.proveedores_id')
                    ->select('productos.*', 'proveedores.nombre')
                    ->get();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->p_nombre = $request->p_nombre;
        $productos->fecha_ing = $request->fecha_ing;
        $productos->costo = $request->costo;
        $productos->stock = $request->stock;
        $productos->proveedores_id = $request->proveedores_id;
        $productos->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = Producto::findOrFail($id);
        return view("productos.show", compact("productos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::findOrFail($id);
        return view("productos.edit", compact("productos"));
        
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
        $productos = Producto::findOrFail($id);
        $productos->update($request->all());
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return redirect("/productos");
    }
}
