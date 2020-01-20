<div>

  <h2 class="titulos">Regista Jogadores</h2>

  <form method="post" action="../php/valida_jogadortreino.php">
        <?php
            include_once '../php/bdcon.php';
            $idtreino = $_GET['treino'];
            $idequipa = $_GET['equipa'];

            $qryjogadores="select id_jogador,nome from Jogador where id_equipa=".$idequipa." and id_jogador not in (select id_jogador from Jogadores_Treino where id_treino=".$idtreino.")";
            $vnomeJogadores = mysqli_query($liga, $qryjogadores);
            if(mysqli_num_rows($vnomeJogadores)>0){
              ?> <select name="jogador">
                <?php
                  while($rows=mysqli_fetch_assoc($vnomeJogadores)){
                      ?> <option value="<?php echo $rows['id_jogador'];?>"><?php echo $rows['nome']; ?></option> <?php
                  }
                ?>
              </select>
              <input type="hidden" value="<?php echo $idtreino; ?>" name="treino" />
              <input type="hidden" value="<?php echo $idequipa; ?>" name="equipa" />
              <input type="submit" value="Registar"><?php
            }else {
              ?>
                <p>Sem Jogadores disponíveis</p>
              <?php
            }
         ?>
  </form>

  <div id="imgback">
    <div id="imgbackcor">
      <?php
        $jogadoresregistados = mysqli_query($liga, "Select * from Jogador where id_jogador in (select id_jogador from Jogadores_Treino where id_treino=".$idtreino.") ");
        while($rowsj=mysqli_fetch_assoc($jogadoresregistados)){
          ?>
          <div class="ejogadores">
              <form action="../php/remjogadortreino.php" method="post">
                <input type="hidden" value="<?php echo $idtreino; ?>" name="treino" />
                <input type="hidden" value="<?php echo $idequipa; ?>" name="equipa" />
                <input type="hidden" value="<?php echo $rowsj['id_jogador'];?>" name="jogador" />
                <input type="submit" value="Eliminar">
              </form>
              <p class="nomej"><?php echo $rowsj['nome']; ?></p>
              <p class="infoj">Golos Marcados: <?php echo $rowsj['n_golos_marcados']; ?></p>
              <p class="infoj">Golos Sofridos: <?php echo $rowsj['n_golos_sofridos']; ?></p>
              <p class="infoj">N.º Jogos: <?php echo $rowsj['n_jogos']; ?></p>
              <p class="infoj">N.º Treinos: <?php echo $rowsj['n_treinos']; ?></p>
              <p class="infoj">Data Nascimento: <?php echo $rowsj['data_nascimento']; ?></p>
          </div>
          <?php
        }
       ?>
    </div>
  </div>
  <a href="../php/index.php?page=10"><input type="submit" style="float: right; width: 100%;" value="Confirmar"></a>
</div>
