@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Cadastro de Reunião</h3>
      </div>
  </div>

  @if(isset($errors) && count ($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    </div>
  @endif

<div class="card-body">

<form id="cad_reuniao" action="{{ route('cadastrar_reuniao') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
      <div class="form-group col-md-5">
        <label for="nameReuniao">Nome</label>
        <input type="text" class="form-control"  name="name" id="nameReuniao" value="{{old('name')}}">
      </div>

      <div class="form-group col-md-5">
      <label for="departamentoReuniao">Departamento</label>
        <select id="departamentoReu" name="departamentoReu" class="form-control" value="{{old('departamentoReu')}}">
            <option>Escolha...</option>
        @foreach($departamentos as $departamento)
                    <option value="{{$departamento->id}}">{{$departamento->name}}</option>
        @endforeach
        </select> 
      </div>

      <!-- <div class="form-group col-md-5">
        <label for="departamentoReuniao">Departamento</label>
        <input type="text" class="form-control"  name="departamento" id="departamentoReuniao">
      </div> -->
      <div class="form-group col-md-3">
        <label for="dtEReuniao">Data</label>
        <input type="date" class="form-control" name="data" id="dtReuniao" value="{{old('data')}}">
      </div>

      <div class="form-group col-md-3">
      <label for="localReuniao">Local</label>
      <input type="text" class="form-control" name="local" id="localReuniao" value="{{old('local')}}">
    </div>
  
    <div class="form-group">
      <label for="hrReuniao">Horário</label>
      <input type="time"  class="form-control" name="horario" id="hrReuniao" value="{{old('horario')}}">
    </div>
  </div>

  <div class="form-row" >
    <div class="form-group col-md-4" >
        <label for="participantesReu">Participantes &nbsp; &nbsp;</label>
        <div >
          <select multiple class="esq select-part" na style="width: 300px; height: 100px">
          @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
          @endforeach
          </select>
          <div>
            <button class="dir">▶</button>
            <button class="esq">◀</button>
          </div>
          <select multiple class="dir select-part" name="participantes[]" style="width: 300px; height: 100px"></select>
       </div>
    </div>
  </div>  

<div class="form-row ">
    <div class="form-group col-md-4">
      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    </div>
  </div> 

</form>

                      
<script>

function mover(fonte, destino) {
  var selecionados = fonte.querySelectorAll("option:checked");
  for ( var i = 0 ; i < selecionados.length ; i++ ) {
      fonte.removeChild(selecionados[i]);
      destino.appendChild(selecionados[i]);
  }
}

$("#cad_reuniao").submit(function(event){
   event.preventDefault();
});

$('#Cadastrar').click(function() {
	$('#cad_reuniao').submit();
});



document.querySelector("button.dir").onclick = function() {
    mover(document.querySelector("select.esq"),
          document.querySelector("select.dir"));
};

document.querySelector("button.esq").onclick = function() {
    mover(document.querySelector("select.dir"),
          document.querySelector("select.esq"));
};

</script>


@endsection