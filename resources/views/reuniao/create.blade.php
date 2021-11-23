@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Cadastro de Reunião</h3>
      </div>
      <div class="form-group col-md-5">
      <a href="{{ route('cadastrar_reuniao') }}" class="btn btn-success mb-2">Adicionar</a>
      </div>
  </div>


<div class="card-body">

<form action="{{ route('cadastrar_reuniao') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nameReuniao">Nome</label>
        <input type="text" class="form-control"  name="name" id="nameReuniao">
      </div>

      <div class="form-group col-md-5">
        <label for="departamentoReuniao">Departamento</label>
        <input type="text" class="form-control"  name="departamento" id="departamentoReuniao">
      </div>
      <div class="form-group col-md-5">
        <label for="dtEReuniao">Data</label>
        <input type="date" class="form-control" name="data" id="dtReuniao" required>
      </div>
  </div>

  <div class="form-row" >
    <div class="form-group col-md-3">
      <label for="localReuniao">Local</label>
      <input type="text" class="form-control" name="local" id="localReuniao" required>
    </div>
  
    <div class="form-group">
      <label for="hrReuniao">Horário</label>
      <input type="time"  class="form-control" name="horario" id="hrReuniao" required>
    </div>
  </div>



    <div class="form-group">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    </div>
  </div> 

</form>

                      



@endsection