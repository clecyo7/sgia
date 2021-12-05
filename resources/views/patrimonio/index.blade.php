@extends('welcome')
@section('form')
<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Listagem de Patrimônio</h3>
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
                                <th><h6><b>Marca</b></h6></th>
                                <th><h6><b>Valor</b></h6></th>
                                <th><h6><b>Quantidade</b></h6></th>
                                <th><h6><b>Número Patrimônio</b></h6></th>
                                <th><h6><b>Data de Aquisição</b></h6></th>
                                <th><h6><b>Foto</b></h6></th>
                                <th><h6><b>Ação</b></h6></th>
                                <th><h6><b></b></h6></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patrimonios as $patrimonio)
                                <tr>
                                    <td>{{ $patrimonio->name }}</td>
                                    <td>{{ $patrimonio->marca }}</td>
                                    <td>{{ $patrimonio->valor }}</td>
                                    <td>{{ $patrimonio->quantidade }}</td>
                                    <td>{{ $patrimonio->nrPatrimonio }}</td>
                                    <td>{{  date('d-m-Y', strtotime($patrimonio->dtAquisicao)) }}</td>
                                   
                                    @if(!empty($patrimonio->image))
                                    <td><img src="/img/patrimonio/{{$patrimonio->image}}" alt="{{$patrimonio->image}}" class="img-preview-index"></td>
                                    @else
                                        <td></td>               
                                    @endif
                                    <td style="width: 5%;text-align: center">
                                    <a href="/patrimonio/{{$patrimonio->id}}"><button class="btn btn-info btn-sm fa fa-search" aria-hidden="true" title="Visualizar"></button></a>
                                    </td>
                                    <td style="width: 5%;text-align: center">
                                        <form method="post" action="/patrimonio/ {{$patrimonio->id}}" onsubmit="return confirm('Tem certeza que deseja remover?')">
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