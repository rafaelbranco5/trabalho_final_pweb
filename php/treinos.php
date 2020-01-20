
<div id="imgback">
  <div id="imgbackcor">
    <div style="width: 100%;height:50px;">
      <div id="titlejogos">
          <h2 class="titulos"><a href="../php/index.php?page=10"><img src="../images/refresh.png" style="width:35px;height:35px;"></a><a href="?page=4" style="margin-left: 20px;">Jogos</a></h2>
      </div>
    </div>
    <h1 class="titulos">Treinos por Terminar</h1>
    <div class="jpt">
      <?php
        include_once '../php/bdcon.php';
        $qryjpt="select t.data, t.local, t.duracao, e.nome, t.id_treino,t.id_equipa, case when t.data <= CURDATE() then 'A decorrer' else 'Agendado' end as 'estado' from Treino t left join Equipa e on t.id_equipa=e.id_equipa where t.terminado=0 order by t.data asc";
        $vjpt = mysqli_query($liga, $qryjpt);
        if(mysqli_num_rows($vjpt)>0){
          while($rowsjpt=mysqli_fetch_assoc($vjpt)){
            ?>
            <div class="ejogadores">
                <?php
                    include_once '../php/sessionstart.php';
                    if (isset($_SESSION['admin']) && isset($_SESSION['treinador'])){
                      if(($rowsjpt['estado']=='A decorrer') && ($_SESSION['admin']==true or $_SESSION['treinador']==true)){
                      ?>  <a style="width:100%; height:20px;" href="?page=11&treino=<?php echo $rowsjpt['id_treino'];?>&equipa=<?php  echo $rowsjpt['id_equipa'];?>"> <img style="float: left; width: 20px; height: 20px;" src="../images/edit.png"></a>  <?php
                      }
                    }
                 ?>
                <p class="estado"><?php echo $rowsjpt['estado']; ?></p>
                <p class="nomej"><?php echo $rowsjpt['nome']; ?></p>
                <p class="nomej"> <?php echo $rowsjpt['data']; ?></p>
                <p class="infoj">Duração: <?php echo $rowsjpt['duracao']; ?> M</p>
                <p class="infoj"><?php echo $rowsjpt['local']; ?></p>
                <!-- numero/percentagem de presenças no treino -->
            </div>
            <?php
          }
        }else {
          ?> <p style="font-weight:bold; font-size: 25px; color: black;">Sem Treinos Agendados...</p> <?php
        }
       ?>
  </div>
</div>
<div id="imgback">
  <div id="imgbackcor">
   <h1 class="titulos">Treinos já terminados</h1>
   <div class="jt">
     <?php
       $qryjt="select t.data, t.local, t.duracao, e.nome from Treino t left join Equipa e on t.id_equipa=e.id_equipa where t.terminado=1 order by t.data desc";
       $vjt = mysqli_query($liga, $qryjt);
       if (mysqli_num_rows($vjt)>0){
         while($rowsjt=mysqli_fetch_assoc($vjt)){
           ?>
           <div class="ejogadores">
              <p class="estado">Terminado</p>
               <p class="nomej"><?php echo $rowsjt['nome']; ?></p>
               <p class="nomej"><?php echo $rowsjt['data']; ?></p>
               <p class="infoj"><?php echo $rowsjt['local']; ?></p>
           </div>
           <?php
         }
       }else {
         ?> <p style="font-weight:bold; font-size: 25px; color: black;">Sem Treinos Terminados...</p> <?php
       }
      ?>
  </div>
</div>
