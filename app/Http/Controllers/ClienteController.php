<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::select('clientes')
                    ->join('users', 'users.id', '=', 'clientes.users_id')
                    ->select('clientes.*', 'users.email', 'users.name')
                    ->get();
        return view("clientes.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    use RegistersUsers;
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $users = new User;
        $users->email = $request['email']; 
        $users->password = Hash::make($request['password']); 
        $users->name = $request['nombre']; 
        $users->save();
        //-----------------------------------
        $clientes = new Cliente;
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->direccion = $request->direccion;
        $clientes->telefono = $request->telefono;
        $clientes->fecha_nac = $request->fecha_nac;
        $clientes->correo = $request->correo;
        $clientes->users_id = $users->id;
        $clientes->estado = "A"; // A = Activo | I = Inactivo
        $clientes->save();
        return redirect("/login");
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
        $clientes = Cliente::findOrFail($id);
        return view("clientes.edit", compact("clientes"));
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
        $clientes = Cliente::findOrFail($id);
        $clientes->update($request->all());
        return view("/clientes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return view("/clientes");
    }
}
