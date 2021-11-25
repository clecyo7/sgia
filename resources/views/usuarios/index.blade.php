@extends('welcome')
@section('form')
<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Listagem de Usuários</h3>
      </div>
      <div class="form-group col-md-5">
      <a href="{{ route('cadastrar_patrimonio') }}" class="btn btn-success mb-2">Adicionar</a>
      </div>
  </div>


@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="row-select" class="display table table-borderd table-hover">
                        <thead>
                            <tr>
                                <th><h6><b>Nome</b></h6></th>
                                <th><h6><b>E-mail</b></h6></th>
                                <th><h6><b>Data de Nacimento</b></h6></th>
                                <th><h6><b>Função</b></h6></th>
                                <th><h6><b></b></h6></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ date('d-m-Y', strtotime($usuario->dt_nasci)) }}</td>
                                    <td>Membro</td>
                                    <td style="width: 5%;text-align: center">
                                    <a href="/usuarios/{{$usuario->id}}"><button class="btn btn-info btn-sm fa fa-search" aria-hidden="true" title="Visualizar"></button></a>
                                    </td>
                                    <td style="width: 5%;text-align: center">
                                        <form method="post" action="/patrimonio/ {{}}" onsubmit="return confirm('Tem certeza que deseja remover?')">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-danger btn-sm fa fa-trash" aria-hidden="true" title="Excluir"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection