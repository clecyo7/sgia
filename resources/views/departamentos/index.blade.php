@extends('welcome')
@section('form')
<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Listagem de Departamentos</h3>
      </div>
      <div class="form-group col-md-5">
      <a href="{{ route('cadastrar_departamentos') }}" class="btn btn-success mb-2">Adicionar</a>
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
                                <th><h6><b>Diretor</b></h6></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach($departamentos as $departamento)
                                    <td>{{ $departamento->name }}</td>
                                    <td>{{ $departamento->nameDir }}</td>
                                  
                                 
                        
                                    <td style="width: 5%;text-align: center">
                                    <a href="/departamentos/"><button class="btn btn-info btn-sm fa fa-search" aria-hidden="true" title="Visualizar"></button></a>
                                    </td>
                                    <td style="width: 5%;text-align: center">
                                        <form method="post" action="/departamentos/ {{$departamento->id}}" onsubmit="return confirm('Tem certeza que deseja remover?')">
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