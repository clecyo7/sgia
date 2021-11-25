<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::query()->orderBy('id')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('usuarios.index', compact('usuarios', 'mensagem'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show',['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('usuarios.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // Patrimonio::destroy($request->id);
        // $request->session()
        //     ->flash(
        //         'mensagem',
        //         "Patrimônio removido com sucesso"
        //     );
        // return redirect()->route('listar_patrimonio');
    }
}
