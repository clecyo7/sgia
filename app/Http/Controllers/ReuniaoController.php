<?php

namespace App\Http\Controllers;

use App\Reuniao;
use Illuminate\Http\Request;

class ReuniaoController extends Controller
{
  
    public function __construct()
    {
    $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        $reunioes = Reuniao::query()->orderBy('data')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('reuniao.index', compact('reunioes','mensagem'));
    }

    public function create()
    {
        return view('reuniao.create');
    }

    public function store(Request $request)
    {
       $reuniao =  Reuniao::create($request->all());
       
      $request->session()
          ->flash(
              'mensagem',
              "Reunião {$reuniao->name} criada com sucesso!"
          );
          return redirect()->route('listar_reuniao');
      
    }

    
    public function show(Reuniao $reuniao)
    {
        //
    }

   
    public function edit(Reuniao $reuniao)
    {
        //
    }

    
    public function update(Request $request, Reuniao $reuniao)
    {
        //
    }

    public function destroy(Request $request)
    {
        Reuniao::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Reunião removido com sucesso"
            );
        return redirect()->route('listar_reuniao');
    }
}

