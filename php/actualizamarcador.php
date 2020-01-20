<div id="formActualizaMarcador">
    <?php
        include_once '../php/bdcon.php';
        $idjogo = $_GET['jogo'];

        $querryequipacasa = "select nome from equipa where id_equipa=(select id_local from jogo where id_jogo=".$idjogo.");";
        $querryequipavisitante = "select nome from equipa where id_equipa=(select id_visitante from jogo where id_jogo=".$idjogo.");";

?>      <select name="">
            <option value="">Casa</option>
            <option value="">Visitante</option>
        </select>
    
</div>