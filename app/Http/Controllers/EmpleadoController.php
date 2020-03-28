<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Login;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$empleados = Empleado::all();
        $empleados = Empleado::select('empleados')
                    ->join('logins', 'logins.id', '=', 'empleados.logins_id')
                    ->join('tipo_empleados', 'tipo_empleados.id', '=', 'empleados.tipo_empleados_id')
                    ->select('empleados.*', 'logins.usuario', 'logins.contra', 'tipo_empleados.nombre', 'logins.estado')
                    ->get();
        return view("empleados.index", compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logins = new Login;
        $logins->usuario = $request->usuario; 
        $logins->contra = $request->contra; 
        $logins->foto = $request->foto; 
        $logins->estado = "A"; // A = Activo | I = Inactivo
        $logins->save();
        $empleados = new Empleado;
        $empleados->e_nombre = $request->e_nombre;
        $empleados->apellido = $request->apellido;
        $empleados->direccion = $request->direccion;
        $empleados->telefono = $request->telefono;
        $empleados->fecha_nac = $request->fecha_nac;
        $empleados->correo = $request->correo;
        $empleados->tipo_empleados_id = $request->tipo_empleados_id;
        $empleados->logins_id = $logins->id;
        $empleados->save();
        return redirect("/empleados");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::findOrFail($id);
        return view("empleados.edit", compact("empleados"));
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
        $empleados = Empleado::findOrFail($id);
        $empleados->update($request->all());
        return redirect("/empleados");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleados = Empleado::find($id);
        $empleados->delete();
        return redirect("/empleados");
    }

    public function getDomestik(){
        $empleados = Empleado::select('empleados')
                    ->join('logins', 'logins.id', '=', 'empleados.logins_id')
                    ->select('empleados.*', 'logins.usuario', 'logins.contra', 'logins.estado')
                    ->where('empleados.tipo_empleados_id', '=', 3)
                    ->get();
        return view("empleados.domestik", compact("empleados"));
    }
}
