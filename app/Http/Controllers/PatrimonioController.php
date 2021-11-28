<?php

namespace App\Http\Controllers;

use App\Patrimonio;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patrimonios = Patrimonio::query()->orderBy('id')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('patrimonio.index', compact('patrimonios', 'mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
         $request->session()
             ->flash(
                'mensagem',
                 "Patrimônio nº {$patrimonio->nrPatrimonio} criado com sucesso!"
             );
             return redirect()->route('listar_patrimonio');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrimonio = Patrimonio::find($id);

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
        $patrimonio->image = $request->file('image');

      
    //Imagem Upload
    if($request->hasFile('image') && $request->file('image')->isValid()){

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = $requestImage->getClientOriginalName();
        $requestImage->move(public_path('img/patrimonio'), $imageName);
        $patrimonio['image'] = $imageName;
          
        if(file_exists($imgAntiga)){
            unlink($imgAntiga);
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

        Patrimonio::destroy($request->id);

        if(file_exists($imgAntiga)){
            unlink($imgAntiga);
        }
        $request->session()
            ->flash(
                'mensagem',
                "Patrimônio removido com sucesso"
            );
        return redirect()->route('listar_patrimonio');
    }
}
