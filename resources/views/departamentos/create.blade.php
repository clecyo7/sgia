@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Cadastro de Departamentos</h3>
      </div>
  </div>


  

<div class="card-body">

<form action="{{ route('cadastrar_departamentos') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nameEvento">Nome</label>
        <input type="text" class="form-control"  name="name" id="nameEvento">
      </div>

      <div class="form-group col-md-5">
        <label for="diretorDepar">Diretor</label>
        <select id="diretorDepar" name="diretor" class="form-control">
            <option>Escolha...</option>
        @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
        @endforeach
        </select> 
      </div>
  </div>


    <div class="form-group">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    </div>
  </div> 

</form>

                      



@endsection