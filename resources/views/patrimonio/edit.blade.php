@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Atualizar Patrimônio</h3>
      </div>
  </div>


<div class="card-body">

<form action="/patrimonio/update/ {{$patrimonio->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nomePatrimonio">Nome</label>
        <input type="text" class="form-control"  value="{{$patrimonio->name}}" name="name" id="nomePatrimonio">
      </div>
      <div class="form-group col-md-5">
        <label for="marcaPatrimonio">Marca</label>
        <input type="text" class="form-control" value="{{$patrimonio->marca}}" name="marca" id="marcaPatrimonio" required>
      </div>
  </div>

  <div class="form-row" >
    <div class="form-group col-md-3">
      <label for="valorPatrimonio">Valor do Patrimônio</label>
      <input type="number" min="0.00" max="10000.00" class="form-control" value="{{$patrimonio->valor}}" name="valor" id="valorPatrimonio" required>
    </div>
  
    <div class="form-group col-md-3">
      <label for="qtdPatrimonio">Quantidade</label>
      <input type="number" min="1" class="form-control" name="quantidade" value="{{$patrimonio->quantidade}}" id="qtdPatrimonio" required>
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-3">
      <label for="nrPatrimonio">Número do Patrimônio</label>
      <input type="number" min="1" maxlength="6"  class="form-control" value="{{$patrimonio->nrPatrimonio}}" name="nrPatrimonio" id="nrPatrimonio" required>
    </div>
    <div class="form-group col-md-3"> 
        <label for="dtAquisicao">Data de Aquisição</label>
        <input type="date" class="form-control" name="dtAquisicao" value="{{$patrimonio->dtAquisicao}}"  id="dtAquisicao" required>
    </div> 
  </div>
    <div class="form-row">
    <div class="form-group col-md-5">
        <label for="image">Foto do Patrimônio</label>
        <input type="file" class="form-control" name="image" id="image" class="from-control-file">
       <img src="/img/patrimonio/{{$patrimonio->image}}" alt="{{$patrimonio->image}}" class="img-preview">
    </div>  
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
    </div>
  </div> 

</form>

@endsection