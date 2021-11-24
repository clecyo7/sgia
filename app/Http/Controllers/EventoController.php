<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventos = Evento::query()->orderBy('id')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('eventos.index', compact('eventos', 'mensagem'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos = Evento::create($request->all());
        $request->session()
        ->flash(
           'mensagem',
            "Patrimônio {$eventos->name} criado com sucesso!"
        );
        return redirect()->route('listar_eventos');   

    }

    public function show(Evento $evento)
    {
        //
    }


    public function edit(Evento $evento)
    {
        //
    }


    public function update(Request $request, Evento $evento)
    {
        //
    }


    public function destroy(Request $request, Evento $evento)
    {
        Evento::destroy($request->id);
        $request->session()
        ->flash(
            'mensagem',
            "Evento removido com sucesso"
        );
    return redirect()->route('listar_eventos');
    }
}
