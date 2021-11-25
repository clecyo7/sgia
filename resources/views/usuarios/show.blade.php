@extends('welcome')
@section('form')

<div class="form-row">
      <div class="form-group col-md-5">
        <h3 class="mb-2">Validar Usuário</h3>
      </div>
  </div>


<div class="card-body">

<form action="" method="POST" >
                        @csrf

    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nameReuniao">Nome</label>
            <input id="name" type="text" value="{{$usuario->name}}" class="form-control @error('name') is-invalid @enderror" name="name"   autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="departamentoReuniao">{{ __('Endereço E-Mail') }}</label>
            <input id="email" type="email" value="{{$usuario->email}}" class="form-control @error('email') is-invalid @enderror" name="email"  >
        </div>
        <div class="form-group col-md-3">
            <label for="dtEReuniao">{{ __('Data Nascimento') }}</label>
            <input id="dt_nasci" type="date" value="{{$usuario->dt_nasci}}" class="form-control @error('dt_nasci') is-invalid @enderror" name="dt_nasci" >
            @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                 </span>
            @enderror
        </div>

        <div class="form-group col-md-3">
            <label for="dtEReuniao">{{ __('Celular') }}</label>
            <input id="celular" type="tel" class="form-control @error('celular') is-invalid @enderror" value="{{$usuario->celular}}" name="celular" placeholder="(xx) xxxxx-xxxx" maxlength="11" >
        </div>

        <div class="form-group col-md-3">
            <label for="dtEReuniao">{{ __('Cep do Endereço') }}</label>
            <input name="end_cep" type="text" id="end_cep" value="{{$usuario->end_cep}}" size="10" maxlength="9" class="form-control"  onblur="pesquisacep(this.value);" />
        </div>
    </div>
      
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nameReuniao">{{ __('Logradouro') }}</label>
            <input name="end_rua" type="text" id="end_rua" value="{{$usuario->end_rua}}" size="60" class="form-control"  />
        </div>
        <div class="form-group col-md-3">
            <label for="departamentoReuniao">{{ __('Número') }}</label>
            <input id="end_numero" type="text" class="form-control @error('end_numero') is-invalid @enderror" name="end_numero" value="{{ $usuario->end_numero }}">
        </div>
        
        <div class="form-group col-md-4">
            <label for="end_complemento">{{ __('Complemento') }}</label>
            <input id="end_complemento" type="text" class="form-control" name="end_complemento" value="{{ $usuario->end_complemento }}" size="10" maxlength="9">
        </div>
    </div>   
                       
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="end_bairro">{{ __('Bairro') }}</label>
            <input id="end_bairro" type="text" class="form-control @error('end_bairro') is-invalid @enderror" name="end_bairro" value="{{ $usuario->end_numero }}" size="10" >   
        </div>
        <div class="form-group col-md-4">
            <label for="end_cidade">{{ __('Cidade') }}</label>
            <input name="end_cidade" type="text" id="end_cidade" size="40" class="form-control" value="{{ $usuario->end_cidade }}" />
        </div>

        <div class="form-group md-4">
            <label for="end_uf" >{{ __('UF') }}</label>
            <select id="end_uf" class="form-control" name="end_uf" value="{{ $usuario->end_uf }}"  >
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

    <div class="form-row ">
            <div class="">
            <button type="submit" class="btn btn-primary">
             {{ __('Registrar') }}
            </button>
            </div>
        </div>
    </form>

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