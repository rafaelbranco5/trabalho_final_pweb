<?php
$jogador = $_POST['jogador'];
$treino = $_POST['treino'];
$equipa = $_POST['equipa'];
include_once '../php/bdcon.php';
if(isset($jogador) && isset($treino) && isset($equipa)){
  mysqli_query($liga, "Insert into jogadores_treino (id_jogador, id_treino) values (".$jogador.",".$treino.")");
  header("Refresh:0; url=../php/index.php?page=11&equipa=".$equipa."&treino=".$treino."");
}else {
    echo "<script>alert('Ocorreu um erro ao tentar fazer o registo.')</script>";
    header("Refresh:0; url=../php/index.php?page=10");
}
?>
