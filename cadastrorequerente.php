	<html>
		<head>
			<!-- Meta tags Obrigatórias -->
    			<meta charset='utf-8'>
    			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    		<!-- Bootstrap CSS -->
    			<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
			<title>Cadastrar Requerente</title>
		</head>
		
		<body>
		
			<header> 
        <!-- Conteúdo do navbar -->
        <nav class='navbar navbar-expand-lg navbar-light'>
             <a class='navbar-brand' href='admin.php'>
            <img src='img/logo.png' alt='logo' height='100px'>
               Requerimento online
          </a>
              
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav'>
              <li class='nav-item'>
                <a class='nav-link' href='cadastrorequerente.php'>Cadastrar Requerente</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='cadastrorequerimento.php'>Cadastrar Requerimento</a>
              </li>
              
              <li class='nav-item'>
                <a class='nav-link' href='cadastrocurso.html'>Cadastrar Curso</a>
              </li>
             
            </ul>
          </div>
        </nav>
      </header>

			<main>
      <div class='mx-auto' style='width: 500px;'>
			<form method='post' action='conexaorequerente.php' enctype='multipart/form-data'>
				<fieldset>
				<div class='container-fluid'>
					<div class='form-group'>
    					<label for='nome'>Nome requerente</label>
    					<input type='text' name='nome' id='nome' class='form-control'  placeholder='Digite o nome do requerente' required>
  					</div>
					<div class='form-group'>
    					<label for='cpf'>CPF do Requerente</label>
    					<input type='text'  maxlength=14 name='cpf' id='cpf' class='form-control' placeholder='Digite o CPF do requerente' required>
  					</div>
            <div class='form-group'>
              <label for='rg'>RG do Requerente</label>
              <input type='text'  maxlength=12 name='rg' id='rg' class='form-control' aria-describedby='emailHelp' placeholder='Digite o RG do requerente' required>
            </div>
  					<div class='form-group'>
              <label for='email'>E-mail do Requerente</label>
              <input type='text' name='email' id='email' class='form-control' placeholder='Digite o email do requerente' required>
            </div>
            <div class='form-group'>
              <label for='responsavel'>Responsável do Requerente</label>
              <input type='text' name='responsavel' id='responsavel' class='form-control' placeholder='Digite o nome do responsável do requerente' required>
            </div>
            <div class='form-group'>
              <label for='telfixo'>Telefone para contato</label>
              <input type='text' maxlength=11 name='telfixo' id='telfixo' class='form-control' placeholder='Digite o telefone para contato do requerente' required>
            </div>
            <div class='form-group'>
              <label for='turno'>Turno do requerente</label>
              <input type='text' name='turno' id='turno' class='form-control' placeholder='Digite o turno do requerente' required>
            </div>
            <div class='form-group'>
              <label for='periodo'>Periodo do requerente</label>
              <input type='text' name='periodo' id='periodo' class='form-control' placeholder='Digite o periodo do requerente' required>
            </div>
            <div class='form-group'>
              <label for='turma'>Turma do requerente</label>
              <input type='text' name='turma' id='turma' class='form-control' placeholder='Digite a turma do requerente' required>
            </div>
            <div class='form-group'>
              <label for='curso'>Curso</label>
              <select name='curso'>
              <option></option>
        
              <?php
	                $connect = mysqli_connect('localhost','root','digitesenha','estagio');  
			       	    $query_select = "SELECT id_curso, nome_curso FROM curso"; 
				          $select = mysqli_query($connect, $query_select); 
	                 while($fetch = mysqli_fetch_array($select)){
	              	  echo '<option value="'.$fetch['nome_curso'].'"> '.$fetch['nome_curso'].'</option>';
	                   }
              ?> 
            </select>
            </div>
					<button type='submit' id='salvar' name='salvar' class='btn btn-primary btn-lg btn-block' style='background: #359830; border-color: #359830'>Salvar requerente</button>
				</div>
				</fieldset>
			</form>
    </div>
		</main>
		</body>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='js/bootstrap.js'></script>
	</html>