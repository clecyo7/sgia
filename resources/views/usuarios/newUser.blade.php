@extends('welcome')
@section('form')
<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Listagem de Novos Usuários</h3>
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
                                <th><h6><b>Opção</b></h6></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td id="userId{{$usuario->id }}">{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ date('d-m-Y', strtotime($usuario->dt_nasci)) }}</td>
                                    <td style="width: 5%;text-align: center">
                                  <button class="btn btn-success btn-sm fa fa-check" aria-hidden="true" title="Ativar" data-toggle="modal" data-target="#modalUser" data-id="{{ $usuario->id }}" ></button>
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

<!-- Modal -->
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUserLabel">Ativar Usuário : <div id=usuarioName> </div> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('usuariosNovosUpdate') }}" method="POST" >
                        @csrf
                        <input type='hidden' name='id' id='userId'>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="">Cargo</label>
             <select class="form-control" name='cargoId' required>
                 <option selected  value="">Selecione o cargo</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
             </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Ativar Usuário</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$( document ).ready(function() {
    $('#modalUser').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
          var recipientId =button.data('id');
          $('#userId').val(recipientId);
          var nameUser= $('#userId'+recipientId).text()
         $('#usuarioName').html(nameUser);


    })
    });

</script>
@endsection
