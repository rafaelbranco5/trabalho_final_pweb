
<div id="imgback">
  <div id="imgbackcor">
    <div style="width: 100%;height:50px;">
    <div id="titlejogos">
      <a href="../php/index.php?page=4"><img src="../images/refresh.png" style="width:35px;height:35px;"></a>
      <?php
        include_once '../php/sessionstart.php';
        if (isset($_SESSION['admin']) && isset($_SESSION['treinador'])){ ?>
          <a href="../php/index.php?page=12"><img src="../images/add.jpg" style="width:35px;height:35px;"></a> <?php
        } ?>
      <h2 class="titulos">Jogos</h2>
      
    </div>
    <div id="titletreinos">
        <h2 class="titulos"><a href="?page=10">Treinos</a></h2>
    </div>
    </div>
    <h1 class="titulos">Jogos por Terminar</h1>
    <div class="jpt">
      <?php
        include_once '../php/bdcon.php';
        $qryjpt="select j.id_jogo, j.tipo_jogo, j.local, j.duracao, concat(el.nome,' vs. ',ev.nome) as `equipas`, concat(cast(j.golos_equipa_local as VARCHAR(3)),'-',cast(j.golos_equipa_visitante as VARCHAR(3))) as `resultado`, concat(cast(j.n_cartoes_amarelos_local as VARCHAR(3)),'-',cast(j.n_cartoes_amarelos_visitante as VARCHAR(3))) as `amarelos`, concat(cast(j.n_cartoes_vermelhos_local as VARCHAR(3)),'-',cast(j.n_cartoes_vermelhos_visitante as VARCHAR(3))) as `vermelhos`, case when j.data <= CURDATE() then 'A decorrer' else 'Agendado' end as 'estado' from Jogo j left join Equipa el on j.id_local=el.id_equipa left join Equipa ev on j.id_visitante=ev.id_equipa where j.terminado=0 order by j.data asc";
        $vjpt = mysqli_query($liga, $qryjpt);
        if(mysqli_num_rows($vjpt)>0){
          while($rowsjpt=mysqli_fetch_assoc($vjpt)){
            ?>
            <div class="ejogadores">
                <?php
                    include_once '../php/sessionstart.php';
                    if (isset($_SESSION['admin']) && isset($_SESSION['treinador'])){
                      if(($rowsjpt['estado']=='A decorrer') && ($_SESSION['admin']==true or $_SESSION['treinador']==true)){
                      ?>  <a style="width:100%; height:20px;" href="?page=13&jogo=<?php echo $rowsjpt['id_jogo'];?>"> <img style="float: left; width: 20px; height: 20px;" src="../images/edit.png"></a>  <?php
                      }
                    }
                ?>
                <p class="estado"><?php echo $rowsjpt['estado']; ?></p>
                <p class="nomej"><?php echo $rowsjpt['equipas']; ?></p>
                <p class="nomej"> <?php echo $rowsjpt['resultado']; ?></p>
                <p class="infoj">Duração: <?php echo $rowsjpt['duracao']; ?>M</p>
                <p class="infoj">N.º amarelos: <?php echo $rowsjpt['amarelos']; ?></p>
                <p class="infoj">N.º vermelhos: <?php echo $rowsjpt['vermelhos']; ?></p>
                <p class="infoj"><?php echo $rowsjpt['local']; ?></p>
            </div>
            <?php
          }
        }else {
          ?> <p style="font-weight:bold; font-size: 25px; color: black;">Sem Jogos Agendados...</p> <?php
        }
       ?>
    </div>
  </div>
</div>
<div id="imgback">
  <div id="imgbackcor">
   <h1 class="titulos">Jogos já terminados</h1>
   <div class="jt">
     <?php
       $qryjt="select j.tipo_jogo, j.duracao, concat(el.nome,' vs. ',ev.nome) as `equipas`, j.local,
       concat(cast(j.golos_equipa_local as VARCHAR(3)),'-',cast(j.golos_equipa_visitante as VARCHAR(3))) as `resultado`,
       concat(cast(j.n_cartoes_amarelos_local as VARCHAR(3)),'-',cast(j.n_cartoes_amarelos_visitante as VARCHAR(3))) as `amarelos`,
       concat(cast(j.n_cartoes_vermelhos_local as VARCHAR(3)),'-',cast(j.n_cartoes_vermelhos_visitante as VARCHAR(3))) as `vermelhos`
       from Jogo j
       left join Equipa el on j.id_local=el.id_equipa
       left join Equipa ev on j.id_visitante=ev.id_equipa
       where j.terminado=1
       order by j.data desc";
       $vjt = mysqli_query($liga, $qryjt);
       if (mysqli_num_rows($vjt)>0){
         while($rowsjt=mysqli_fetch_assoc($vjt)){
           ?>
           <div class="ejogadores">
               <p class="nomej"><?php echo $rowsjt['equipas']; ?></p>
               <p class="nomej"> <?php echo $rowsjt['resultado']; ?></p>
               <p class="infoj">Duração: <?php echo $rowsjt['duracao']; ?>M</p>
               <p class="infoj">N.º amarelos: <?php echo $rowsjt['amarelos']; ?></p>
               <p class="infoj">N.º vermelhos: <?php echo $rowsjt['vermelhos']; ?></p>
               <p class="infoj"><?php echo $rowsjt['local']; ?></p>
           </div>
           <?php
         }
       }else {
         ?> <p style="font-weight:bold; font-size: 25px; color: black;">Sem Jogos Terminados...</p> <?php
       }
      ?>
    </div>
  </div>
</div>
