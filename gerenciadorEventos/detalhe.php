﻿<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fatec Ipiranga</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/services.css">
	
	<!-- Ligando com o Banco de Dados utilizando php -->
	<?php 
	$titulo = "";
	$descritivo = "";
	$local = "";
	$data = "";
	
	$id = $_GET["id"];
	$sql = "select * from evento where codigo=$a";
	if(){
		$titulo = registro["titulo"];	
		$descritivo = registro["descricao"];	
		$local = registro["local"];
		$data = registro["data"];
	    }
	?>

	
  </head>

  <body>

    <!-- Navigation -->
      <nav class="fixed-top navbar-expand-lg fixed-topn navbar-dark navbar-cabecalho">
          <div class="menu-main">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-3 col-sm-3 col-md-3 col-lg-2  cabecalho-item">
                          <h1><a href="index.html"><img class="logo" src="../img/logoFatecIpiranga.png" alt="Fatec Ipiranga"></a></h1>
                      </div>
                      <div class=" col-lg-4 cabecalho-item cabecalho-item-busca">
                          <div class="input-group collapse navbar-collapse" id="inputResponsive">
                              <input type="text" class="form-control  input-pesquisar" placeholder="Search for...">
                              <span class="input-group-btn  ">
                                  <button class="btn btn-pesquisar" type="button"></button>
                              </span>
                          </div>
                      </div>

                      <div class="col-3 col-sm-3 col-md-3 col-lg-2  cabecalho-item cabecalho-item-cps">
                          <h2><a href="http://www.cps.sp.gov.br/" target="_blank"><img class="logo-cps" src="../img/logoCpsBranco.png" alt="Centro Paula Souza"></a></h2>
                      </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                  </div>
              </div>
          </div>
          <div class="row align-items-center menu-suspenso">
              <div class="container">

                  <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav menu-lista js-menu">
                          <li class="nav-item  itens-nav">
                              <div class="cabecalho-item dropdown-item-busca">
                                  <div class="input-group" id="inputResponsive">
                                      <input type="text" class="form-control  input-pesquisar" placeholder="Search for...">
                                      <span class="input-group-btn  ">
                                          <button class="btn btn-pesquisar" type="button"></button>
                                      </span>
                                  </div>
                              </div>
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
      </nav>

    <!-- Page Content -->
    <div class="container  conteudo">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Eventos
        <small>- <?php echo $titulo ?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Eventos</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

      <!-- Marketing Icons Section -->
      <div class="row  conteudo-cards">
        <div class="col-lg-12 mb-12">		
		<h3><?php echo $descritivo ?> </h3><br/><br/>
		</div>
		 <div class="col-lg-6 mb-6">	
          <div class="card h-100  card-borda">
            <h4 class="card-header">Ficha do Evento</h4>
            <div class="card-body">
              <p class="card-text">
				<h4><?php echo $descritivo ?></h4><br/><br/>
			  Local: <h3><?php echo $local ?></h3> <br/><br/>
			  Data: <h3><?php echo $data ?></h3>
			  </p>
            </div>
            <div class="card-footer  card-rodape  card-borda">
              <a href="cadastro.html" class="btn  botao-padrao">Cadastre-se agora</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-6">	
          <div class="card h-100  card-borda">
            <h4 class="card-header">Local Evento</h4>
            <div class="card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3655.859513197488!2d-46.60959219842528!3d-23.609370822351288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2102d3f76afde05d!2sFaculdade+de+Tecnologia+Estadual+-+FATEC+Ipiranga!5e0!3m2!1spt-BR!2sbr!4v1525208027303" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>            
          </div>
        </div>        
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 rodape">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/carregarMenuPrincipal.js"></script>
    <script src="../js/mostrarMenuPrincipal.js"></script>


  </body>

</html>