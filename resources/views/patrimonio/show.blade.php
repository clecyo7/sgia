<!-- @extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Visualizar Patrimônio</h3>
      </div>
      <div class="form-group col-md-5">
      <a href="{{ route('cadastrar_patrimonio') }}" class="btn btn-success mb-2">Update</a>
      </div>
  </div>


<div class="card-body">

<form action="{{ route('cadastrar_patrimonio') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nomePatrimonio">Nome</label>
        <input type="text" class="form-control"  value="{{$patrimonio->name}}" name="name" id="nomePatrimonio">
      </div>
      <div class="form-group col-md-5">
        <label for="marcaPatrimonio">Marca</label>
        <input type="text" class="form-control" name="marca" id="marcaPatrimonio" required>
      </div>
  </div>

  <div class="form-row" >
    <div class="form-group col-md-3">
      <label for="valorPatrimonio">Valor do Patrimônio</label>
      <input type="number" min="0.00" max="10000.00" class="form-control" name="valor" id="valorPatrimonio" required>
    </div>
  
    <div class="form-group">
      <label for="qtdPatrimonio">Quantidade</label>
      <input type="number" min="1" class="form-control" name="quantidade" id="qtdPatrimonio" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="nrPatrimonio">Número do Patrimônio</label>
      <input type="number" min="1" maxlength="6"  class="form-control" name="nrPatrimonio" id="nrPatrimonio" required>
    </div>
    <div class="form-group">
      <div class="form-group col-md-12">
        <label for="dtAquisicao">Data de Aquisição</label>
        <input type="date" class="form-control" name="dtAquisicao" id="dtAquisicao" required>
      </div>
    </div> 

    <div class="form-group">
      <div class="form-group col-md-12">
        <label for="image">Foto do Patrimônio</label>
        <input type="file" class="form-control" name="image" id="image" class="from-control-file">
      </div>
    </div> 

    <div class="form-group">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    </div>
  </div> 

</form> -->