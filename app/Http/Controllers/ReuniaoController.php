<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Reuniao;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Reuniao\ReuniaoStoreFormRequest;
use App\Participante;

class ReuniaoController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
       $reunioes = Reuniao::query()->orderBy('id')->get();
    //     $reunioes = DB::table('reuniaos')->join('departamentos','reuniaos.departamentos', '=' , 'departamentos.id')
    //     ->select('departamentos.*' ,'departamentos.name ')->get();
    //    // $reunioes = Reuniao::query()->orderBy('data')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('reuniao.index', compact('reunioes','mensagem'));
    }

    public function create()
    {

        $usuarios = User::query()->orderBy('id')->get();
        $departamentos = Departamento::query()->orderBy('id')->get();
        return view('reuniao.create', compact('usuarios', 'departamentos'));
    }

    public function store(ReuniaoStoreFormRequest $request)
    {
        // Laço para executar se todas as querys forem  true  abre -> DB::beginTransaction();  fecha-> DB::commit();
    
        DB::beginTransaction();
        try{
            $reuniao =  Reuniao::create($request->all());
            for($i = 0; $i < count($request->participantes); $i++){
                $participantes = new Participante();
                $participantes->reuniao = $reuniao->id;
                $participantes->usuarios = $request->participantes[$i];
                $participantes->save();
                }
            DB::commit();

            $request->session()
                ->flash(
                    'mensagem',
                    "Reunião {$reuniao->name} criada com sucesso!"
                );
                return redirect()->route('listar_reuniao');

            } catch(\Exception $erro){
               $msgErro =  $erro->getMessage();
                $request->session()
                ->flash(
                    'mensagem',
                    $msgErro
                );
                return redirect()->route('listar_reuniao');   
            }
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

