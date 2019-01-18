	<?php 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$responsavel = $_POST['responsavel'];
$telfixo = $_POST['telfixo'];
$turno = $_POST['turno'];
$periodo = $_POST['periodo'];
$turma = $_POST['turma'];
$curso = $_POST['curso'];
$id = mysqli_insert_id($curso);

$connect = mysqli_connect('localhost','root','digitesenha','estagio');  


$query_select = "SELECT nome_requerente FROM requerente WHERE nome_requerente = '$nome'"; 
$select = mysqli_query($connect, $query_select); 
$array = mysqli_fetch_array($select);
$logarray = $array['nome'];

      if($logarray == $nome){ 
        echo"<script language='javascript' type='text/javascript'>alert('Esse requerente já existe');window.location.href='cadastrorequerente.php';</script>"; 
        die();
        
      }else{

        $query = "INSERT INTO requerente(nome_requerente, cpf_requerente, rg_requerente, email_requerente, responsavel_requerente, telefone_requerente, turno_requerente, periodo_requerente, turma_requerente, curso_requerente) VALUES ('$nome', '$cpf', '$rg', '$email', '$responsavel', '$telfixo', '$turno', '$periodo',  '$turma', 'id')"; 
        $insert = mysqli_query($connect, $query); 
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Requerente cadastrado com sucesso!');window.location.href='cadastrorequerente.php'</script>"; 
        } else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse requerimento');window.location.href='cadastrorequerente.php'</script>"; /** caso deu algum erro no banco, vai mostrar essa mensagem**/
        }
        }  
?>