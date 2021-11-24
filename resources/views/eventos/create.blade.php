@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Cadastro de Eventos</h3>
      </div>   
  </div>


<div class="card-body">

<form action="{{ route('cadastrar_eventos') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nameEvento">Nome</label>
        <input type="text" class="form-control"  name="name" id="nameEvento">
      </div>

      <div class="form-group col-md-5">
        <label for="descricaoEvento">Descrição</label>
        <input type="text" class="form-control"  name="descricao" id="descricaoEvento">
      </div>
      <div class="form-group col-md-5">
        <label for="dtEvento">Data</label>
        <input type="date" class="form-control" name="data" id="dtEvento" required>
      </div>
  </div>

  <div class="form-row" >
    <div class="form-group col-md-3">
      <label for="localEvento">Local</label>
      <input type="text" class="form-control" name="local" id="" required>
    </div>
  
    <div class="form-group">
      <label for="hrEvento">Horário</label>
      <input type="time"  class="form-control" name="horario" id="hrEvento" required>
    </div>
  </div>


    <div class="form-group">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    </div>
  </div> 

</form>

                      



@endsection