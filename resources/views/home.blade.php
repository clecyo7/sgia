@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="alert alert-success" role="alert">
              Usuário Criado com Sucesso, Aguarde o Administrador validar seu cadastro.
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <span style="text-overflow: clip;"><a href="/">Voltar à Página inicial</a> </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
