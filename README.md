`Repositório para desenvolvimento do sistema de demandas e ordens de serviços
Instalação do projeto após clonar

1° composer install
2° Copiar o arquivo .env.example e colar so como .env
3° executar comando  composer update e depois php artisan key:generate
4° Nomear APP_ENV ou para "Local" ou "prod" (se for prod mudar tambem APP_DEBUG=false)
5° Alterar os dados de conexões de banco de dados no arquivo .env (se for usar Sqlite ->
modificar a contante DB_Connection para sqlite, comentar com # as Contantes DB e
criar um arquivo database.sqlite na pasta database)
6° Executar as migrations (php artisan migrate)



Projeto para gerenciamento de atividade da Igreja

Esse projeto tem como objetivo sistematizar ações, podendo trazer um avanço e tecnologia auxiliando os Diretores de Departamento.

Nesse primento Momento será desenvolvido no SGIA - Sistema de Gerenciamento Igreja ADV:

Tela de Login
Cadastro de Patrimônio
Cadastro de Usuários
cadastro de Cargos e Funções de cada membro  
Cadastro de agenda de atividades
Cadastro de escalas por departamento  

Escalas 
	tipos de escalas ex = musica, limpeza
	quantidade de pessoas 
	data 
		
Agenda 
		data
		evento 
		local 
		horario 
		participantes
		disparar email


Cargos
			cadastro de cargos  1 usuario pode ter mais de 1 cargo 
			
			
Cadastro de membro 
				nome 
				celular
				endereço 
				cpf 
				data nascimento 
				cargos 
Patrominio 
					tipo   - cadastrar tipo 
					nome 
					marca 
					valor 
					nr patrimonio
                    
Tecnologias que serão utilizadas 
Laravel 7 

                    
					
					
			
		
