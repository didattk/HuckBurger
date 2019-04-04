<?php
$nome  = $_POST["nome"];
$telefone = $_POST["telefone"];
$pontodecarne = $_POST["pontodecarne"];
$pao= $_POST["pao"];
$queijo = $_POST["queijo"];
$observacao = $_POST["observacao"];

include_once 'conexao.php';

$sql = " insert into pedidos values (null,'$nome','$telefone','$pontodecarne','$pao','$queijo','$observacao',) ";


if($nome != "" && $telefone != "" && $pontodecarne != "" $pao != "" && $queijo != "" && $observacao != ""){
  if(mysqli_query($con,$sql)){
      echo"Gravado com sucessso!";
  }else{
    echo"Erro ao gravar!";
  }  
    
}else{
    echo"Preencha todos os campos";
}
mysqli_close($con);





?>