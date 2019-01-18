<?php 
$justificativa = $_POST['justificativa'];
$deferimento = $_POST['deferimento'];
$dataparecer = $_POST['dataparecer'];
$requerimento = $_POST['requerimento'];
$connect = mysqli_connect('localhost','root','digitesenha','estagio');  
$query_select = "SELECT justificativa_parecer FROM requerimento WHERE justificativa_parecer = '$justificativa'"; 
$select = mysqli_query($connect, $query_select); 
$array = mysqli_fetch_array($select);
$logarray = $array['justificativa'];

      
        $query = "INSERT INTO parecer (justificativa_parecer, deferimento_parecer, fechamento_parecer, requerimento_parecer, requerimento_parecer) VALUES ('$justificativa', '$deferimento', '$dataparecer', $requerimento)"; 
        $insert = mysqli_query($connect, $query); 
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Requerimento cadastrado com sucesso!');window.location.href='cadastroparecer.php'</script>"; 
        } else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse requerimento');window.location.href='cadastroparecer.php'</script>"; /** caso deu algum erro no banco, vai mostrar essa mensagem**/
        }
        }  
?>
