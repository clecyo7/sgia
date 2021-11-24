<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $departamentos = DB::table('departamentos')->join('users','departamentos.diretor', '=' , 'users.id')
         ->select('departamentos.*' ,'users.name as nameDir')->get();
        // $departamentos = Departamento::query()->orderBy('id')->toSql();
        //   dd($departamentos);
        //   exit;
        $mensagem = $request->session()->get('mensagem');
        return view('departamentos.index', compact('departamentos', 'mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::query()->orderBy('id')->get();
        return view('departamentos.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamentos = Departamento::create($request->all());
        $request->session()
        ->flash(
            'mensagem',
            "Departamento {$departamentos->name} criado com sucesso!"
        );
        return redirect()->route('listar_departamentos');   
      
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento, Request $request)
    {
       Departamento::destroy($request->id);
       $request->session()
        ->flash(
            'mensagem',
            "Departamento removido com sucesso"
        );
    return redirect()->route('listar_departamentos');

    }
}

        