@extends('welcome')
@section('form')

@if(isset($usuarios))
  <div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Novos Usuários</h4>
  <p>O sistema possui novo Usuários que precisam ser validados</p>

  @foreach($usuarios as $usuario)
    <li>{{ $usuario->name}}</li>
  @endforeach


@endif


</div>

@endsection