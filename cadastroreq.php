<?php 

$protocolo = $_POST['protocolo'];
$detalhamento = $_POST['detalhamento'];
$categoria = $_POST['categoria'];
$pedido = $_POST['pedido'];

$connect = mysqli_connect('localhost','root','digitesenha','estagio');  
$query_select = "SELECT protocolo_requerimento FROM requerimento WHERE protocolo_requerimento = '$protocolo'"; 
$select = mysqli_query($connect, $query_select); 
$array = mysqli_fetch_array($select);
$logarray = $array['protocolo'];

      if($logarray == $categoria){ 
        echo"<script language='javascript' type='text/javascript'>alert('Esse requerimento já existe');window.location.href='cadastrorequerimento.php';</script>"; 
        die();
        
      }else{
        $query = "INSERT INTO requerimento (protocolo_requerimento, detalhamento_requerimento, categoria_requerimento, pedido_requerimento) VALUES ('$protocolo', '$detalhamento', '$categoria', '$pedido')"; 
        $insert = mysqli_query($connect, $query); 
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Requerimento cadastrado com sucesso!');window.location.href='cadastrorequerimento.html'</script>"; 
        } else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse requerimento');window.location.href='cadastrorequerimento.html'</script>"; /** caso deu algum erro no banco, vai mostrar essa mensagem**/
        }
        }  
?>
