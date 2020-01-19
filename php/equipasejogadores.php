<html>
  <head>
    <title>Equipas</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
  </head>
  <body>
    <h3 class="titulos">Equipas</h3>
    <p class="texto">As Equipas Registadas são as seguintes</p>
    <div id="teamlateral">
        <p class="lequipa"><a href="?page=3&equipa=0">Fechar Info</a></li></p>
          <?php
              include_once '../php/bdcon.php';
              $vteam = mysqli_query($liga, "SELECT id_equipa,nome from Equipa");
              while($rowse=mysqli_fetch_assoc($vteam)){
                ?>
                  <p class="lequipa"><a href="?page=3&equipa=<?php echo $rowse['id_equipa'];?>"><?php echo $rowse['nome'];?></a></p>
                <?php
              }
           ?>
    </div>
    <div id="jogadores">
      <div id="jogadorescor">
        <?php
        if (isset($_GET['equipa'])) {
          switch ($_GET['equipa']) {
    				case 0:
            ?>
            <?php
    					break;
    				default:
                $vqj = mysqli_query($liga, "Select * from Jogador where id_equipa=".$_GET['equipa']."");
                while($rowsj=mysqli_fetch_assoc($vqj)){
                ?>
                    <div class="ejogadores">
                        <p class="nomej"><?php echo $rowsj['nome']; ?></p>
                        <p class="infoj">Golos: <?php echo $rowsj['n_golos_marcados']; ?></p>
                        <p class="infoj">Assistências: <?php echo $rowsj['n_assistencias']; ?></p>
                        <p class="infoj">N.º Jogos: <?php echo $rowsj['n_jogos']; ?></p>
                        <p class="infoj">N.º Camisola: <?php echo $rowsj['numero_camisola']; ?></p>
                        <p class="infoj">Data de Nascimento: <?php echo $rowsj['data_nascimento']; ?></p>
                    </div>
                <?php
                }
    					break;
    			}
        }
        ?>
      </div>
    </div>
  </body>
</html>
