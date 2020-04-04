<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }

    public function logeo()
    {
        return view('logins.login2');
    }

    public function verificarLogin(Request $request){
        $usuario = htmlspecialchars($request->usuario);
        //$usuario = 'admin';
        $contra = htmlspecialchars($request->contra);
        //$contra = '123456';
        $logins = Login::where('usuario',$usuario)
                ->get();
            if (count($logins)!=0) {
                $login = $logins->first();//Coge el primer registro y sobre ese se hace las comparaciones
                if ($login->estado=='A') {
                    if ($login->usuario==$usuario && $login->contra==$contra) {
                        return redirect('/admin');
                    }else{
                        return 'Usuario o Contraseña incorrecta';
                    }
                }else{
                    return 'Usuario inhabilitado';
                }
            }else{
                return 'Usuario no encontrado';
            }
    }

}
