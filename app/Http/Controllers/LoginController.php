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


    public function verificarLogin(Request $request){
        $usuario = $request->usuario;
        $contra = $request->contra;
        if ($usuario==null || $contra==null) {
            $logins = Login::select('logins')
                    ->where('logins.usuario', '=', $request->usuario)
                    ->get();
            if (count($logins)!=0) {
                $login = $logins->first();//Coge el primer registro y sobre ese se hace las comparaciones
                if ($login->estado=='A') {
                    if ($login->usuario==$usuario && $login->contra==$contra) {
                        return view('/');
                    }else{
                        echo 'Usuario o Contraseña incorrecta';
                    }
                }else{
                    echo 'Usuario inhabilitado';
                }
            }else{
                echo 'Usuario no encontrado';
            }
        }else{
            echo 'Usuario o Contraseña vacío';
        }
    }

}
