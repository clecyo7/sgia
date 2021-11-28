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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/welcome', 'HomeController@admin')->middleware('auth');
Auth::routes();
Route::get('/admin', 'AuthController@dashboard')->name('admin')->middleware('auth');


/* -- ROTAS DE Patrimônio -- */
Route::get('/patrimonio', 'PatrimonioController@index')->name('listar_patrimonio')->middleware('auth');
Route::get('/patrimonio_create', 'PatrimonioController@create')->middleware('auth');
Route::post('/patrimonio_create', 'PatrimonioController@store')->name('cadastrar_patrimonio')->middleware('auth');
Route::delete('/patrimonio/{id}', 'PatrimonioController@destroy')->middleware('auth');
Route::put('/patrimonio/update/{id}', 'PatrimonioController@update')->middleware('auth');
Route::get('/patrimonio/{id}', 'PatrimonioController@edit')->middleware('auth');


/* -- ROTAS DE Eventos -- */
Route::get('/eventos', 'EventoController@index')->name('listar_eventos')->middleware('auth');
Route::get('/eventos_create', 'EventoController@create')->middleware('auth');
Route::post('/eventos_create', 'EventoController@store')->name('cadastrar_eventos')->middleware('auth');
Route::delete('/eventos/{id}', 'EventoController@destroy')->middleware('auth');


/* -- ROTAS DE REUNIÃO -- */
Route::get('/reunioes', 'ReuniaoController@index')->name('listar_reuniao')->middleware('auth');
Route::get('/reuniao_create', 'ReuniaoController@create')->middleware('auth');
Route::post('/reuniao_create', 'ReuniaoController@store')->name('cadastrar_reuniao')->middleware('auth');
Route::delete('/reunioes/{id}', 'ReuniaoController@destroy')->middleware('auth');

/* -- ROTAS DE DEPARTAMENTO -- */
Route::get('/departamentos', 'DepartamentoController@index')->name('listar_departamentos')->middleware('auth');
Route::get('/departamentos_create', 'DepartamentoController@create')->middleware('auth');
Route::post('/departamentos_create', 'DepartamentoController@store')->name('cadastrar_departamentos')->middleware('auth');
Route::delete('/departamentos/{id}', 'DepartamentoController@destroy')->middleware('auth');

/* -- ROTAS DE USUARIOS -- */
Route::get('/usuarios', 'UserController@index')->name('listar_usuarios')->middleware('auth');
Route::get('/usuarios/{id}', 'UserController@show')->middleware('auth');
Route::post('/usuarios_update','UserController@update')->name('update_usuario')->middleware('auth');
Route::delete('/usuarios/{id}', 'UserController@destroy')->middleware('auth');