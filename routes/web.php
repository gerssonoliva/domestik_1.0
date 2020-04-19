<?php
//uso de modelos
use App\Banco;
use App\Cuenta_bancaria;
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

Route::get('/admin', function(){
    return view('layout.content');
});

Route::get('/web', function(){
    return view('websites.index');
});

Route::resource('bancos', 'BancoController');

Route::resource('cuentas', 'Cuenta_bancariaController');

Route::resource('proveedores', 'ProveedorController');

Route::resource('productos', 'ProductoController');

Route::resource('tipo_empleados', 'Tipo_empleadoController');

Route::resource('empleados', 'EmpleadoController');
Route::get('/domestik', 'EmpleadoController@getDomestik');

Route::resource('clientes', 'ClienteController');

Route::resource('users', 'UserController');

Route::get('registro', function(){
    return view('clientes.create');
});

/*
Route::get('/crear, BancoController@create');
Route::get('/insertar, BancoController@store');
Route::get('/actualizar, BancoController@update');
Route::get('/borrar, BancoController@destroy');
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
