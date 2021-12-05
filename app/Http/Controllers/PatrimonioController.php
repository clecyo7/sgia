<?php

namespace App\Http\Controllers;

use App\Patrimonio;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

  
    public function index(Request $request)
    {
        $user = auth()->user();
        $patrimonios = Patrimonio::query()->orderBy('id')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('patrimonio.index', compact('patrimonios', 'mensagem', 'user'));
    }

 
    public function create()
    {
        return view('patrimonio.create');
    }


    public function store(Request $request)
    {
       $patrimonio = Patrimonio::create($request->all());

        //Imagem Upload
    if($request->hasFile('image') && $request->file('image')->isValid()){

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = $requestImage->getClientOriginalName();
        $requestImage->move(public_path('img/patrimonio'), $imageName);
        $patrimonio->image = $imageName;
        $patrimonio->save();  
    }

    // upload nota fiscal 
    if($request->hasFile('notaFiscal') && $request->file('notaFiscal')->isValid()){

        $requestNtFiscal = $request->notaFiscal;
        $extension = $requestNtFiscal->extension();
        $pdfNtFiscal = $requestNtFiscal->getClientOriginalName();
        $requestNtFiscal->move(public_path('notaFiscal/patrimonio'), $pdfNtFiscal);
        $patrimonio->notaFiscal = $pdfNtFiscal;
        $patrimonio->save();  
    }
         $request->session()
             ->flash(
                'mensagem',
                 "Patrimônio nº {$patrimonio->nrPatrimonio} criado com sucesso!"
             );
             return redirect()->route('listar_patrimonio');     
    }

 
    public function show($id)
    {
      // $patrimonio = Patrimonio::find($id);
       // return view('show', ['patrimonio' => $patrimonio]);
    }

 
    public function edit($id)
    {
       $patrimonio = Patrimonio::findOrFail($id);
       return view('patrimonio.edit' , ['patrimonio' => $patrimonio]);
    }

  
    public function update(Request $request, $id)
    {
        $patrimonio = Patrimonio::find($id);
        $patrimonio->name = $request->input('name');    
        $patrimonio->marca = $request->input('marca');
        $patrimonio->valor = $request->input('valor');
        $patrimonio->quantidade = $request->input('quantidade');
        $patrimonio->nrPatrimonio = $request->input('nrPatrimonio');
        $patrimonio->dtAquisicao = $request->input('dtAquisicao');
        $imgAntiga =  'img/patrimonio/' . $patrimonio->image;
        $notaAntiga =  'notaFiscal/patrimonio/' . $patrimonio->notaFiscal;
        $imgAntigaBD =  $patrimonio->image;
        $notaAntigaBD =  $patrimonio->notaFiscal;
        if( empty($patrimonio->image)){
            $patrimonio->image = $request->file('image');
        }
        if(empty(  $patrimonio->notaFiscal)){
            $patrimonio->notaFiscal = $request->file('notaFiscal');
        }
        
    //Nota  Upload
    if($request->hasFile('image') && $request->file('image')->isValid()){

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = $requestImage->getClientOriginalName();
        $requestImage->move(public_path('img/patrimonio'), $imageName);
        $patrimonio['image'] = $imageName;
          
        if(file_exists($imgAntiga) && !empty( $imgAntigaBD)){
            unlink($imgAntiga);
        }
    }

    if($request->hasFile('notaFiscal') && $request->file('notaFiscal')->isValid()){
        $requestNota = $request->notaFiscal;
        $extension =  $requestNota->extension();
        $notaName =   $requestNota->getClientOriginalName();
        $requestNota->move(public_path('notaFiscal/patrimonio/'),  $notaName);
        $patrimonio['notaFiscal'] =  $notaName;
          
        if(file_exists($notaAntiga) && !empty($notaAntigaBD)){
            unlink($notaAntiga);
        }
    }

    $patrimonio->update();

        $request->session()
            ->flash(
                'mensagem',
                "Patrimônio atualizado com sucesso"
            );
        return redirect()->route('listar_patrimonio');

    }

    public function destroy(Request $request)
    {
        $patrimonio = Patrimonio::find($request->id);
        $imgAntiga =  'img/patrimonio/' . $patrimonio->image;

        if(file_exists($imgAntiga) && !empty($patrimonio->image)){
            unlink($imgAntiga);
        }

        Patrimonio::destroy($request->id);

       
        $request->session()
            ->flash(
                'mensagem',
                "Patrimônio removido com sucesso"
            );
        return redirect()->route('listar_patrimonio');
    }
}
