@extends('welcome')
@section('form')
<h3 class="mb-4">Cadastro de Patrimônio</h3>
<div class="card-body">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomePatrimonio">Nome</label>
      <input type="text" class="form-control"  name="nomePatrimonio" id="nomePatrimonio">
    </div>
    <div class="form-group col-md-6">
      <label for="marcaPatrimonio">Marca</label>
      <input type="text" class="form-control" name="marcaPatrimonio" id="marcaPatrimonio" >
    </div>
  </div>
  <div class="form-group">
    <label for="valorPatrimonio">Valor do Patrimônio</label>
    <input type="number" min="0.00" max="10000.00" class="form-control" name="valorPatrimonio" id="valorPatrimonio">
  </div>
  <div class="form-group">
    <label for="qtdPatrimonio">Quantidade</label>
    <input type="number" min="1" class="form-control" name="qtdPatrimonio" id="qtdPatrimonio">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nrPatrimonio">Número do Patrimônio</label>
      <input type="number" min="1"  class="form-control" name="nrPatrimonio" id="nrPatrimonio">
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dtAquisição">Data de Aquisição</label>
      <input type="detr" class="form-control" name="dtAquisição" id="dtAquisição">
    </div>
    
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

                      



@endsection