<?php
    include_once '../php/bdcon.php';
    $epquipacasa = $_POST['equipacasa'];
    $epquipafora = $_POST['equipafora'];
    $local = $_POST['localjogo'];
    $data = $_POST['datajogo'];

    if (isset($epquipacasa) && isset($epquipafora) && isset($local) && isset($data)) {
        mysqli_query($liga, "Insert into jogo (tipo_jogo, duracao, data, local, golos_equipa_local, golos_equipa_visitante, n_cartoes_amarelos_local, n_cartoes_amarelos_visitante, n_caroes_vermelhos_local, n_cartoes_vermelhos_visitante, id_local, id_visitante, terminado) values (11vs11, 90, ".$data.", ".$local."0,0,0,0,0,0, ".$epquipacasa.", ".$epquipafora.", 0)");
        header("Refresh:0; url=../php/index.php?page=4");
    } else {
        echo "<script>alert('Ocorreu um erro ao tentar fazer o registo.')</script>";
        header("Refresh:0; url=../php/index.php?page=12");
    }