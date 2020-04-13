<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banco;
use App\Http\Requests\Create_Bancos_Request;//Agregado para usar el método de validación

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = Banco::all();
        return view("bancos.index", compact("bancos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bancos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create_Bancos_Request $request)
    {
        /*$this->validate($request, [
            REVISAR LA CARPETA Request
        ]);*/
        $bancos = new Banco;
        $bancos->nombre = $request->nombre;
        $bancos->save(); 
        return redirect("/bancos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bancos = Banco::findOrFail($id);
        return view("bancos.show", compact("bancos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bancos = Banco::findOrFail($id);
        return view("bancos.edit", compact("bancos"));
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
        $bancos = Banco::findOrFail($id);
        $bancos->update($request->all());
        return redirect('/bancos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bancos = Banco::find($id);
        $bancos->delete();
        return redirect('/bancos');
    }
}
