<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>SGIA - Sistema Gerenciamento</title>
    <link rel="icon" href="img/258.png">
  </head>
  <body>
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">
          
          <a href="/" class="navbar-brand">
            <img src="img/258.png" width="100">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="" class="nav-link">Sobre</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Escalas</a>
              </li>
              <li class="nav-item">
                <a href="#agenda" class="nav-link">Agenda</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Fotos</a>
              </li>

              <li class="nav-item divisor"></li>

            
              <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <section id="home" class="d-flex"><!--home -->
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12 capa">
            
            <div id="carousel-spotify" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <div class="carousel-item active">
                  <h1>Escalas</h1>
                      <a href="" class="btn btn-lg btn-custom btn-branco">
                      <i class="fas fa-bars"></i> Confira as Escalas de cada Departamento
                      </a>
                </div>

                <div class="carousel-item">
                  <h1>Agenda</h1>
                      <a href="" class="btn btn-lg btn-custom btn-branco">
                      <i class="far fa-calendar-alt"></i> Confira
                      </a>
                </div>
                <div class="carousel-item">
                  <h1>Construção</h1>
                      <a href="" class="btn btn-lg btn-custom btn-branco">
                      <i class="fas fa-paint-roller"></i> Acompanhe
                      </a>
                </div>
                
              </div>
              <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
              <i class="fas fa-angle-left fa-3x"></i>
              </a>

              <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
              <i class="fas fa-angle-right fa-3x"></i>
              </a>

            </div>
          </div>
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/fim home -->

   <section id="servicos" class="caixa"><!--/inicio servicos -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row albuns">
            <div class="col-md-6">
              <img src="img/vigilia.png" class="img-fluid k">
            </div>
            <div class="col-md-6">
              <img src="img/cantata.jpg" class="img-fluid ">
            </div>
          </div>          
          <div class="row albuns">
            <div class="col-md-6">
              <img src="img/impacto.jpg" class="img-fluid ">
            </div>
            <div class="col-md-6">
              <img src="img/ja.png" class="img-fluid ">
            </div>  
          </div>
        </div>
        <div class="col-md-6">
          
          <h2>Princípais Eventos</h2>

          <h3>Vigília Jovem </h3>
          <p> Evento vai acontecer dia 08 de Dezembroo ..........</p>

          <h3>Cantada de Natal</h3>
          <p>Grande cantada de natal......</p>  

          <h3>Impacto Esperança</h3>
          <P>O impacto esperança 2021 acontece nesse sábado...</P>

          <h3>JA - O Exemplo do Mestre</h3>
          <P>Culto Jovem...</P>

        </div>
      </div>
    </div>  
   </section><!--/fim serviços -->

   <section id="recursos" class="caixa"><!--/inicio recursos -->
     <div class="container">
      <div class="row">
        <div class="col-md-4">
         
         <h3>7me</h2>
         <p> Baixe agora o App</p>

         <h3> Siga nossa Página no Youtube</h3>
         <p> Acesse agora nossa lista completa de videos </p>

         <!-- <h3>Descobrir</h3>
         <p> Curta músicas novas toda segunda-feira com uma playlista personalizada pra você. Ou relaxe e curta uma das rádios.</p> -->

        </div>
        <div class="col-md-8">
          <div class="row rotacionar">
            <div class="col-md-4">
              <img src="img/iphone4.png" class="img-fluid" width="160">
            </div>
            <div class="col-md-4 ">
              <img src="img/youtube_igre.png" class="img-fluid" width="160">
            </div>
          </div>
        </div>
        
      </div>
     </div>
   </section><!--/fim recursos -->

   <section id="agenda" class="caixa"><!--/INICIO AGENDA -->
    <div class="container">  
        <div class="card">
            <div class="bootstrap-data-table-panel">
                    <table id="" class="display table table-borderd table-hover">
                        <thead>
                            <tr>
                                <th><h6><b>Nome</b></h6></th>
                                <th><h6><b>Departamento</b></h6></th>
                                <th><h6><b>Data</b></h6></th>
                                <th><h6><b>Local</b></h6></th>
                                <th><h6><b>Horário</b></h6></th>
                      
                                <th><h6><b>Ação</b></h6></th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                            @foreach($reunioes as $reuniao)
                                <td>{{$reuniao->name}}</td>
                                <td>{{$reuniao->nameDep}}</td>
                                <td>{{ date('d-m-Y', strtotime($reuniao->data)) }}</td>
                                <td>{{$reuniao->local}}</td>
                                <td>{{$reuniao->horario}}</td>          
                                 <td style="width: 5%;text-align: center">
                                 <a href="/reuniao/{{$reuniao->id}}"><button class="btn btn-info btn-sm fa fa-search" aria-hidden="true" title="Visualizar"></button></a>
                                 </td>
                               
                                 <td style="width: 5%;text-align: center">
                                     <form method="post" action="/reunioes/ {{$reuniao->id}}" onsubmit="return confirm('Tem certeza que deseja remover?')">
                                         @csrf
                                         @method('DELETE')
                                             <button class="btn btn-danger btn-sm fa fa-trash" aria-hidden="true" title="Excluir"></button>
                                     </form>
                                 </td>
                              
                        <tr>
                       @endforeach
                        </tbody>
                     </table>
            
            </div>
        </div>
    </div>
   
   </section><!--/FIM AGENDA -->

   <footer id="rodape">
     <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/258.png" width="100">
        </div>
       
        <div class="col-md-6">
          <ul>
            <li>
            <a href=""><i class="fab fa-facebook fa-3x"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-instagram fa-3x"></i></a>
            </li>
            <li>
            <a href="https://www.youtube.com/channel/UCbzA85XPLmX1C8NKiBvEEZw"><i class="fab fa-youtube fa-3x"></i></i></a>
            </li>
          </ul>
        </div>
      </div>
     </div>
   </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>