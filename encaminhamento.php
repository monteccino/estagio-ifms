<?php 
$entrega = $_POST['entrega'];
$devolução = $_POST['devolução'];
$setor = $_POST['setor'];
$resumo = $_POST['resumo'];
$requerimento = $_POST['requerimento']; (CONVERSAR COM O SERGIO)
$connect = mysqli_connect('localhost','root','digitesenha','estagio');  
$query_select = "SELECT entrega_encaminhamento FROM encaminhamento WHERE entrega_encaminhamento = '$entrega'"; 
$select = mysqli_query($connect, $query_select); 
$array = mysqli_fetch_array($select);
$logarray = $array['entrega'];

        $query = "INSERT INTO encaminhamento(entrega_encaminhamento, devolução_encaminhamento, setor_encaminhamento, resumo_encaminhamento, requerimento_encaminhamento) VALUES ('$entrega', '$devolução', '$setor', '$resumo')"; 
        $insert = mysqli_query($connect, $query); 
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('encaminhamento cadastrado com sucesso!');window.location.href='cadastroparecer.html'</script>"; 
        } else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse requerimento');window.location.href='cadastroparecer.html'</script>"; /** caso deu algum erro no banco, vai mostrar essa mensagem**/
        }
        }  
?>
