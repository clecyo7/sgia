<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $user = auth()->user();

    //     $reunioes = DB::table('reuniaos')
    //      ->leftJoin('departamentos','reuniaos.id', '=' , 'departamentos.id')
    //      ->select('*','departamentos.name as nameDep')
    //      ->get();
          
    //    // $mensagem = $request->session()->get('mensagem');
        return view('index');
    }
}
