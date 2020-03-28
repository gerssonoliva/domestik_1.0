<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_empleado;

class Tipo_empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_empleados = Tipo_empleado::all();
        return view("tipo_empleados.index", compact("tipo_empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tipo_empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_empleados = new Tipo_empleado;
        $tipo_empleados->nombre = $request->nombre;
        $tipo_empleados->descripcion = $request->descripcion;
        $tipo_empleados->save();
        return redirect("/tipo_empleados");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_empleados = Tipo_empleado::findOrFail($id);
        return view("tipo_empleados.show", compact("tipo_empleados"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_empleados = Tipo_empleado::findOrFail($id);
        return view("tipo_empleados.edit", compact("tipo_empleados"));
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
        $tipo_empleados = Tipo_empleado::findOrFail($id);
        $tipo_empleados->update($request->all());
        return redirect("/tipo_empleados");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_empleados = Tipo_empleado::find($id);
        $tipo_empleados->delete();
        return redirect("/tipo_empleados");
    }
}
