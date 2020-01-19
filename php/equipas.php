<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Equipas</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
  </head>
  <body>
      <h3 class="titulos">Equipas</h3>
      <div id="imgback">
        <div id="imgbackcor">
          <?php
            include_once '../php/bdcon.php';
            $vteam = mysqli_query($liga, "SELECT * from Equipa");
            while($rowse=mysqli_fetch_assoc($vteam)){
              ?>
              <div class="ejogadores">
                  <p id="nomej"><?php echo $rowse['nome']; ?></p>
                  <p class="infoj">Golos Marcados: <?php echo $rowse['n_golos_marcados']; ?></p>
                  <p class="infoj">Golos Sofridos: <?php echo $rowse['n_golos_sofridos']; ?></p>
                  <p class="infoj">N.º Jogos: <?php echo $rowse['total_jogos']; ?></p>
                  <p class="infoj">Vitorias: <?php echo $rowse['n_vitorias']; ?></p>
                  <p class="infoj">Derrotas: <?php echo $rowse['n_derrotas']; ?></p>
                  <p class="infoj">Vitorias: <?php echo $rowse['n_empates']; ?></p>
                  <p class="infoj">N.º Treinos: <?php echo $rowse['total_treinos']; ?></p>
              </div>
              <?php
            }
           ?>
        </div>
      </div>
  </body>
</html>
