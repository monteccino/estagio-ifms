<?php 
$nome = $_POST['nomecurso'];
$categoriacurso = $_POST['categoriacurso'];
$connect = mysqli_connect('localhost','root','digitesenha','estagio');  
$query_select = "SELECT nome_curso FROM curso WHERE nome_curso = '$nome'"; 
$select = mysqli_query($connect, $query_select); 
$array = mysqli_fetch_array($select);
$logarray = $array['nome'];
 
 if($logarray == $nome){ 
        echo"<script language='javascript' type='text/javascript'>alert('Esse curso já existe');window.location.href='cadastrocurso.html';</script>"; 
        die();
        
      }else{
        $query = "INSERT INTO curso (nome_curso, categoria_curso) VALUES ('$nome', '$categoriacurso')"; 
          echo"<script language='javascript' type='text/javascript'>alert('Curso cadastrado com sucesso!');window.location.href='cadastrocurso.html'</script>"; 
        
        $insert = mysqli_query($connect, $query); 
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Curso cadastrado com sucesso!');window.location.href='cadastrocurso.html'</script>"; 
        } else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse curso');window.location.href='cadastrocurso.html'</script>"; /** caso deu algum erro no banco, vai mostrar essa mensagem**/
        }
        }  
?>