<link rel="stylesheet" href="../css/styles.css">
<?php
    include_once '../php/bdcon.php';
    $querryequipas = mysqli_query($liga, "select id_equipa, nome from equipa");
?>
<div id="formAdicionaJogo">
    <p class="titulos">Addicionar novo Jogo</p>
    <form action="../php/validanovojogo.php">
    <div id="escolhecasa">
        <p>Equipa da casa: </p>
        <select name="equipacasa">
        <?php
            while ($aux = mysqli_fetch_assoc($querryequipas)) { ?>
            <option value="<?php echo $aux['id_equipa']; ?>"><?php echo $aux['nome']?></option>
    <?php   } ?>
        </select>
    </div>
    <div id="escolhefora">
        <p>Equipa de fora: </p>
        <select name="equipafora">
        <?php
            $querryequipas2 = mysqli_query($liga, "select id_equipa, nome from equipa");
            while ($aux2 = mysqli_fetch_assoc($querryequipas2)) { ?>
            <option value="<?php echo $aux2['id_equipa']; ?>"><?php echo $aux2['nome']?></option>
    <?php   } ?>
        </select>
    </div>
    <div id="local">
        <input type="text" name="localjogo" placeholder="Insira o local do jogo">
    </div>
    <input type="date" name="datajogo">
    <input type="submit" value="Confrimar">
    </form>
</div>