@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Novo Usuário') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dt_nasci" class="col-md-4 col-form-label text-md-right">{{ __('Data Nascimento') }}</label>

                            <div class="col-md-4">
                                <input id="dt_nasci" type="date" class="form-control @error('dt_nasci') is-invalid @enderror" name="dt_nasci" required autocomplete="dt_nasci">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>
                            <div class="col-md-3">
                                <input id="celular" type="tel" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" placeholder="(xx) xxxxx-xxxx" maxlength="11" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                         <label for="end_rua" class="col-md-4 col-form-label text-md-right">{{ __('Cep do Endereço') }}</label>
                            <div class="col-md-3">
                            <input name="end_cep" type="text" id="end_cep" value="" size="10" maxlength="9" class="form-control @error('end_numero') is-invalid @enderror" 
                              onblur="pesquisacep(this.value);" />
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="end_rua" class="col-md-4 col-form-label text-md-right">{{ __('Logradouro') }}</label>
                            <div class="col-md-6">
                            <input name="end_rua" type="text" id="end_rua" size="60" class="form-control @error('end_rua') is-invalid @enderror"  />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>
                            <div class="col-md-2">
                                <input id="end_numero" type="text" class="form-control @error('end_numero') is-invalid @enderror" name="end_numero" value="{{ old('end_numero') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>
                            <div class="col-md-4">
                                <input id="end_complemento" type="text" class="form-control @error('end_complemento') is-invalid @enderror" name="end_complemento" value="{{ old('end_complemento') }}" size="10" maxlength="9">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>
                            <div class="col-md-6">
                                <input id="end_bairro" type="text" class="form-control @error('end_bairro') is-invalid @enderror" name="end_bairro" value="{{ old('end_bairro') }}" size="10" >
                            </div>
                        </div>

 
                        <div class="form-group row">
                            <label for="end_cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>
                            <div class="col-md-4">
                                <input name="end_cidade" type="text" id="end_cidade" size="40" class="form-control @error('end_cidade') is-invalid @enderror" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_uf" class="col-md-4 col-form-label text-md-right">{{ __('UF') }}</label>
                            <div class="col-md-4">
                                <select id="end_uf" class="form-control @error('end_uf') is-invalid @enderror" name="end_uf" value="{{ old('end_uf') }}" >
		                        	<option value="AC">Acre</option>
		                        	<option value="AL">Alagoas</option>
		                        	<option value="AP">Amapá</option>
		                        	<option value="AM">Amazonas</option>
		                        	<option value="BA">Bahia</option>
		                        	<option value="CE">Ceará</option>
		                        	<option value="DF">Distrito Federal</option>
		                        	<option value="ES">Espírito Santo</option>
		                        	<option value="GO">Goiás</option>
		                        	<option value="MA">Maranhão</option>
		                        	<option value="MT">Mato Grosso</option>
		                        	<option value="MS">Mato Grosso do Sul</option>
		                        	<option value="MG">Minas Gerais</option>
		                        	<option value="PA">Pará</option>
		                        	<option value="PB">Paraíba</option>
		                        	<option value="PR">Paraná</option>
		                        	<option value="PE">Pernambuco</option>
		                        	<option value="PI">Piauí</option>
		                        	<option value="RJ">Rio de Janeiro</option>
		                        	<option value="RN">Rio Grande do Norte</option>
		                        	<option value="RS">Rio Grande do Sul</option>
		                        	<option value="RO">Rondônia</option>
		                        	<option value="RR">Roraima</option>
		                        	<option value="SC">Santa Catarina</option>
		                        	<option value="SP">São Paulo</option>
		                        	<option value="SE">Sergipe</option>
		                        	<option value="TO">Tocantins</option>
		                        </select>
                            </div>
                        </div> 
                      

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                            <div class="col-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>
                            <div class="col-md-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('end_rua').value=("");
            document.getElementById('end_bairro').value=("");
            document.getElementById('end_cidade').value=("");
            document.getElementById('end_uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('end_rua').value=(conteudo.logradouro);
            document.getElementById('end_bairro').value=(conteudo.bairro);
            document.getElementById('end_cidade').value=(conteudo.localidade);
            document.getElementById('end_uf').value=(conteudo.uf);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('end_rua').value="...";
                document.getElementById('end_bairro').value="...";
                document.getElementById('end_cidade').value="...";
                document.getElementById('end_uf').value="...";
              

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
@endsection


