@extends('welcome')
@section('form')

<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">Bem vindo</h4>
</div>
@if($total>0)
  <div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Novos Usuários</h4>
  <p>O sistema possui novo Usuários que precisam ser validados</p>

  @foreach($usuarios as $usuario)
    <li>{{ $usuario->name}}</li>
  @endforeach

<p><a href="{{ route('usuariosNovos') }}">Clique aqui para ir para página de aprovação</a></p>
</div>
@endif



@endsection
