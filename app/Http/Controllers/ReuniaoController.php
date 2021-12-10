<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests\Reuniao\ReuniaoStoreFormRequest;
use App\Participante;
use App\Reuniao;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReuniaoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        $user = auth()->user();

        $reunioes = DB::table('reuniaos')
         ->leftJoin('departamentos','reuniaos.id', '=' , 'departamentos.id')
         ->select('*','departamentos.name as nameDep')
         ->get();
          
        $mensagem = $request->session()->get('mensagem');
        return view('reuniao.index', compact('reunioes', 'mensagem', 'user'));
    }



    public function create()
    {
        $arrParticipantes = array();

        $title = 'Criar Reunião';
        $usuarios = User::query()->orderBy('id')->get();
        $departamentos = Departamento::query()->orderBy('id')->get();
        return view('reuniao.create', compact('usuarios', 'departamentos', 'title', 'arrParticipantes'));
    }

    public function store(ReuniaoStoreFormRequest $request)
    {
        //dd($request->all());
        // Laço para executar se todas as querys forem  true  abre -> DB::beginTransaction();  fecha-> DB::commit();

        DB::beginTransaction();
        try {
            $reuniao = Reuniao::create($request->all());
            for ($i = 0; $i < count($request->participantes); $i++) {
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

        } catch (\Exception $erro) {
            $msgErro = $erro->getMessage();
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

    public function edit($id)
    {
        $title = 'Editar Reunião';
        $usuarios = User::query()->orderBy('id')->get();
        $departamentos = Departamento::query()->orderBy('id')->get();
        $reuniao = Reuniao::findOrFail($id);

        $participantes = DB::table('participantes')
            ->join('users', 'users.id', '=', 'participantes.usuarios')
            ->join('reuniaos', 'reuniaos.id', '=', 'participantes.reuniao')
            ->select('reuniaos.name as nameReu', 'users.name as usersReu', 'reuniaos.data as dataReu', 'users.id')
            ->where('reuniao', '=', $reuniao->id)
            ->get();

        $arrParticipantes = array();

        foreach ($participantes as $participante) {
            $arrParticipantes[] = $participante->id;
        }

        return view('reuniao.create', compact('reuniao', 'usuarios', 'departamentos', 'title', 'participantes', 'arrParticipantes'));
    }

    public function update(Request $request, $id)
    {
    DB::beginTransaction();
        try {
            $dataForm = $request->all();
            $reuniao = Reuniao::find($id);

            // altera os dados da reunião 
            $update = $reuniao->update($dataForm); 

            // exclui todos os participantes 1º da reunião 
            Participante::where('reuniao',$reuniao->id)->delete();
            
            // pega os participantes da reunião e põem dentro de um array
            $arrArray = $request->participantes;
            // faz um novo  create pegando o id da reunião.
            for ($i = 0; $i < count($arrArray); $i++) {
            $participantes = new Participante();
            $participantes->reuniao = $reuniao->id;
            $participantes->usuarios = $request->participantes[$i];
            $participantes->save();
        }
    DB::commit();
            $request->session()
                ->flash(
                    'mensagem',
                    "Reunião {$reuniao->name} Alterada  com sucesso!"
                );
            return redirect()->route('listar_reuniao');

    } catch (\Exception $erro) {
            $msgErro = $erro->getMessage();
            $request->session()
                ->flash(
                    'mensagem',
                    $msgErro
                );        
            return redirect()->route('listar_reuniao');
    }
}

    public function destroy(Request $request, $id)
    {
        Participante::where('reuniao',$request->id)->delete();
        Reuniao::destroy($request->id);
       
        $request->session()
            ->flash(
                'mensagem',
                "Reunião excluida com sucesso"
            );
        return redirect()->route('listar_reuniao');
    }
}
