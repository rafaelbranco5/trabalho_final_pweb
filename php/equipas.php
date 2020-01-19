<html>
  <head>
    <title>Equipas</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
  </head>
  <body>
      <h3 class="titulos">Equipas</h3>
      <?php
        include_once '../php/bdcon.php';
        $vteam = mysqli_query($liga, "SELECT nome, from Equipa");
        while($rowse=mysqli_fetch_assoc($vteam)){
          ?>
          <div class="ejogadores">
              <p id="nomej"><?php $rowsj['nome']; ?></p>
              <p class="infoj">Golos: <?php $rowsj['n_golos_marcados']; ?></p>
              <p class="infoj">Assistências: <?php $rowsj['n_assistencias']; ?></p>
              <p class="infoj">N.º Jogos: <?php $rowsj['n_jogos']; ?></p>
              <p class="infoj">N.º Camisola: <?php $rowsj['numero_camisola']; ?></p>
              <p class="infoj">Data de Nascimento: <?php $rowsj['data_nascimento']; ?></p>
          </div>
            <p class="lequipa"><a href="?page=3&equipa=<?php echo $rowse['id_equipa'];?>"><?php echo $rowse['nome'];?></a></p>
          <?php
        }
       ?>
  </body>
</html>
