<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta_bancaria;

class Cuenta_bancariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cuentas = Cuenta_bancaria::all();
        $cuentas = Cuenta_bancaria::select('cuenta_bancarias')
                    ->join('bancos', 'bancos.id', '=', 'cuenta_bancarias.bancos_id')
                    ->select('cuenta_bancarias.*', 'bancos.nombre')
                    ->get();
        return view('cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuentas = new Cuenta_bancaria;
        $cuentas->nro_cuenta = $request->nro_cuenta;
        $cuentas->bancos_id = $request->bancos_id;
        $cuentas->save();
        return redirect('/cuentas');
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
        $cuentas = Cuenta_bancaria::findOrFail($id);
        return view('cuentas.edit', compact('cuentas'));
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
        $cuentas = Cuenta_bancaria::findOrFail($id);
        $cuentas->update($request->all());
        return redirect('/cuentas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuentas = Cuenta_bancaria::find($id);
        $cuentas->delete();
        return redirect('/cuentas');
    }
}
