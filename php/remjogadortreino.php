<?php
  include_once '../php/bdcon.php';
  $jogador = $_POST['jogador'];
  $treino = $_POST['treino'];
  $equipa = $_POST['equipa'];
  
  if(isset($jogador) && isset($treino) && isset($equipa)){
    mysqli_query($liga, "delete from jogadores_treino where id_jogador=".$jogador." and id_treino=".$treino.";");
    header("Refresh:0; url=../php/index.php?page=11&equipa=".$equipa."&treino=".$treino."");
  }else {
      echo "<script>alert('Ocorreu um erro ao tentar desregistrar.')</script>";
      header("Refresh:0; url=../php/index.php?page=10");
  }
?>
