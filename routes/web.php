<?php

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
Route::get('/patrimonio_create', 'PatrimonioController@create')->middleware('auth');
Route::post('/patrimonio_create', 'PatrimonioController@store')->name('cadastrar_patrimonio');
Route::delete('/patrimonio/{id}', 'PatrimonioController@destroy');
Route::put('/patrimonio/update/{id}', 'PatrimonioController@update');
Route::get('/patrimonio/{id}', 'PatrimonioController@edit');

/* -- ROTAS DE Eventos -- */
Route::get('/eventos', 'EventoController@index')->name('listar_eventos');
Route::get('/eventos_create', 'EventoController@create')->middleware('auth');
Route::post('/eventos_create', 'EventoController@store')->name('cadastrar_eventos');
Route::delete('/eventos/{id}', 'EventoController@destroy');
Route::put('/eventos/update/{id}', 'EventoController@update');
Route::get('/eventos/{id}', 'EventoController@edit');

/* -- ROTAS DE REUNIÃO -- */
Route::get('/reunioes', 'ReuniaoController@index')->name('listar_reuniao');
Route::get('/reuniao_create', 'ReuniaoController@create');
Route::post('/reuniao_create', 'ReuniaoController@store')->name('cadastrar_reuniao');
Route::delete('/reunioes/{id}', 'ReuniaoController@destroy');
Route::put('/reuniao/update/{id}', 'ReuniaoController@update');
Route::get('/reuniao/{id}', 'ReuniaoController@edit');

/* -- ROTAS DE DEPARTAMENTO -- */
Route::get('/departamentos', 'DepartamentoController@index')->name('listar_departamentos');
Route::get('/departamentos_create', 'DepartamentoController@create');
Route::post('/departamentos_create', 'DepartamentoController@store')->name('cadastrar_departamentos');
Route::delete('/departamentos/{id}', 'DepartamentoController@destroy');

/* -- ROTAS DE USUARIOS -- */
Route::get('/usuarios', 'UserController@index')->name('listar_usuarios');
Route::get('/usuarios/{id}', 'UserController@show');
Route::post('/usuarios_update', 'UserController@update')->name('update_usuario');
Route::delete('/usuarios/{id}', 'UserController@destroy');
Route::get('/usuariosNovos', 'UserController@newUser')->name('usuariosNovos');
Route::post('/usuariosNovosUpdate', 'UserController@updateNewUser')->name('usuariosNovosUpdate');
