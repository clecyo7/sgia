<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'HomeController@admin');

Auth::routes();

Route::get('/admin', 'AuthController@dashboard')->name('admin');


/* -- ROTAS DE Patrimônio -- */
Route::get('/patrimonio', 'PatrimonioController@index')->name('listar_patrimonio');
Route::get('/patrimonio_create', 'PatrimonioController@create');
Route::post('/patrimonio_create', 'PatrimonioController@store')->name('cadastrar_patrimonio');
Route::delete('/patrimonio/{id}', 'PatrimonioController@destroy');
Route::get('/patrimonio/{id}', 'PatrimonioController@show');


/* -- ROTAS DE Eventos -- */
Route::get('/eventos', 'EventoController@index')->name('listar_eventos');
Route::get('/eventos_create', 'EventoController@create');
Route::post('/eventos_create', 'EventoController@store')->name('cadastrar_eventos');
Route::delete('/eventos/{id}', 'EventoController@destroy');


/* -- ROTAS DE REUNIÃO -- */
Route::get('/reunioes', 'ReuniaoController@index')->name('listar_reuniao');
Route::get('/reuniao_create', 'ReuniaoController@create');
Route::post('/reuniao_create', 'ReuniaoController@store')->name('cadastrar_reuniao');
Route::delete('/reunioes/{id}', 'ReuniaoController@destroy');

/* -- ROTAS DE DEPARTAMENTO -- */
Route::get('/departamentos', 'DepartamentoController@index')->name('listar_departamentos');
Route::get('/departamentos_create', 'DepartamentoController@create');
Route::post('/departamentos_create', 'DepartamentoController@store')->name('cadastrar_departamentos');
Route::delete('/departamentos/{id}', 'DepartamentoController@destroy');

/* -- ROTAS DE USUARIOS -- */
Route::get('/usuarios', 'UserController@index');
Route::get('/usuarios/{id}', 'UserController@show');
Route::get('/usuarios_update','UserController@update')->name('update_usuarios');