
	<html>
		<head>
			<!-- Meta tags Obrigatórias -->
    			<meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<!-- Bootstrap CSS -->
    			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<title>Cadastrar Parecer</title>
		</head>
		
		<body>
		
				<header> 
        <!-- Conteúdo do navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
             <a class="navbar-brand" href="admin.php">
            <img src="img/logo.png" alt="logo" height="100px">
               Requerimento online
          </a>
              
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

			<main>
        <div class="mx-auto" style="width: 500px;">
			<form method="post" action="parecer.php" enctype="multipart/form-data">
				<fieldset>
        <div class="container-fluid">

          <div class='form-group'>
              <label for='requerimento'>Requerimento</label>
              <select name='requerimento'>
              <option></option>
        
              <?php
                 $connect = mysqli_connect('localhost','root','digitesenha','estagio');  
                 $query_select = "SELECT protocolo_requerimento FROM requerimento"; 
                $select = mysqli_query($connect, $query_select); 
                   while($fetch = mysqli_fetch_array($select)){
                    echo '<option value="'.$fetch['protocolo_requerimento'].'"> '.$fetch['protocolo_requerimento'].'</option>';
                     }
              ?> 
            </select>
            </div>
					<div class="form-group">
    					<label for="justificativa">Justificativa do parecer</label>
    					<input type="text" name="justificativa" id="justificativa" class="form-control" placeholder="Digite a justificativa do parecer"  required>
  					</div>
            <div class="form-group">
              <label for="deferimento">Deferimento</label>
              <input type="text" name="deferimento" id="deferimento" class="form-control" placeholder="Digite o deferimento do requerimento" required>
            </div>
  			
            <div class="form-group">
              <label for="dataparecer">Data que foi feito o parecer</label>
              <input type="date" name="dataparecer" id="dataparecer" class="form-control"  required>
            </div>

					<button type="submit" id="salvar" name="salvar" class="btn btn-primary btn-lg btn-block" style="background: #359830; border-color: #359830">Salvar parecer</button>
        </div>
				</fieldset>
			</form>
    </div>
    </main>

		</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
	</html>
