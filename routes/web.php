<?php
//uso de modelos
use App\Banco;
use App\Cuenta_bancaria;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*CONTROL DE PERFILES*/
Route::get('/inicio', function(){
    //Verificar el perfil del usuario 
    $user = Auth::user();
    if($user->esAdmin()){
        return view('home');
    }else if($user->esCliente()){
        return view('websites.index');
    }

});

/*SECCIÓN DEL SISTEMA ADMINISTRATIVO*/
Route::resource('bancos', 'BancoController');

Route::resource('cuentas', 'Cuenta_bancariaController');

Route::resource('proveedores', 'ProveedorController');

Route::resource('productos', 'ProductoController');

Route::resource('tipo_empleados', 'Tipo_empleadoController');

Route::resource('empleados', 'EmpleadoController');
Route::get('/domestik', 'EmpleadoController@getDomestik');

Route::resource('clientes', 'ClienteController');

Route::resource('users', 'UserController');

/*SECCIÓN DEL SITIO WEB*/
Route::get('/web', function(){
    return view('websites.index');
});

Route::get('registro', function(){
    return view('clientes.create');
});

Route::get('/suscripcion', function(){
    return view('websites.suscripcion');
});
/**/

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
