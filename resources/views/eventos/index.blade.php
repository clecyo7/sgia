@extends('welcome')
@section('form')
<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Listagem de Eventos</h3>
      </div>
      <div class="form-group col-md-5">
      <a href="{{ route('cadastrar_eventos') }}" class="btn btn-success mb-2">Adicionar</a>
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
                                <th><h6><b>Descricao</b></h6></th>
                                <th><h6><b>Data</b></h6></th>
                                <th><h6><b>Local</b></h6></th>
                                <th><h6><b>Horario</b></h6></th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                        @foreach($eventos as $evento)
                                    <td>{{ $evento->name }}</td>
                                    <td>{{ $evento->descricao }}</td>
                                    <td>{{ date('d-m-Y', strtotime($evento->data)) }}</td>
                                    <td>{{ $evento->local }}</td>
                                    <td>{{ date("H:i", strtotime( $evento->horario )) }}</td>
                                 
                        
                                    <td style="width: 5%;text-align: center">
                                    <a href="/patrimonio/"><button class="btn btn-info btn-sm fa fa-search" aria-hidden="true" title="Visualizar"></button></a>
                                    </td>
                                    <td style="width: 5%;text-align: center">
                                        <form method="post" action="/eventos/ {{$evento->id}}" onsubmit="return confirm('Tem certeza que deseja remover?')">
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