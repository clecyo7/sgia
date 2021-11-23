<?php

namespace App\Http\Controllers;

use App\Patrimonio;
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

        return view('show', ['patrimonio' => $patrimonio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrimonio $patrimonio)
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
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Patrimonio::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Patrimônio removido com sucesso"
            );
        return redirect()->route('listar_patrimonio');
    }
}
