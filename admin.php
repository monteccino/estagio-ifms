<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "estagio";
$user = "root";
$pass = "digitesenha";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT protocolo_requerimento from requerimento");
// executa a query
$dados = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
<head>
	<!-- Meta tags Obrigatórias -->
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Administrador</title>
</head>
<body>
	<header> 
		<!-- Conteúdo do navbar -->
				<nav class="navbar navbar-expand-lg navbar-light">
            <img src="img/logo.png" alt="logo" height="100px">
               Requerimento online
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="cadastrorequerente.php">Cadastrar Requerente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrorequerimento.php">Cadastrar Requerimento</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="cadastrocurso.html">Cadastrar Curso</a>
              </li>
            </ul>
          </div>
        </nav>
	</header>

<div class="container-fluid"> 
        <main>  
          <!-- Jumbotron!-->
            <div class="row mt-3"> 
                <div class="container-fluid">
                    <div class="jumbotron" style="background-color: #359830">
                      <h1 class="display-4">Bem vindo, servidor</h1>
                      <hr class="my-4">
                      <p>Coloque somente informações oficiais em nosso sistema.</p>
                    </div>
                </div>
            </div>

            <?php
             // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
        ?>
            <div class="container-fluid" >
              <div class="card text-justify">
                <div class="card-body">
                  <p class="card-text"><b>Requerimento</b>: <?=$linha['protocolo_requerimento']?></p>
                 
                  <a href="cadastroencaminhamento.php" class="btn btn-primary" style="background: #359830; border-color: #359830">Cadastrar encaminhamento</a>
                  <a href="cadastroparecer.php" class="btn btn-primary" style="background: #359830; border-color: #359830">Cadastrar parecer</a>

                </div>
              </div>
            </div>
        <?php
        // finaliza o loop que vai mostrar os dados
          }while($linha = mysqli_fetch_assoc($dados));
         // fim do if 
          }
        ?>
            
</main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</html>