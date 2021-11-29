<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    
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

   
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show',['usuario' => $usuario]);
    }

    
    public function edit()
    {
        //
    }

   
    public function update($id, Request $request)
    {
        $usuario = User::find($id);
        $usuario->usuario = $request->usuario;
        $usuario->save();
        return redirect()->route('listar_usuarios');
    }

   
    public function destroy(Request $request)
    {
        User::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Usuário removido com sucesso"
            );
        return redirect()->route('listar_usuarios');
    }
}
