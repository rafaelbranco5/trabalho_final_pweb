<?php
    include_once '../php/bdcon.php';
    $epquipacasa = $_POST['equipacasa'];
    $epquipafora = $_POST['equipafora'];
    $local = $_POST['localjogo'];
    $data = $_POST['datajogo'];

    if (isset($epquipacasa) && isset($epquipafora) && isset($local) && isset($data)) {
        mysqli_query($liga, "insert INTO `Jogo`(`tipo_jogo`, `duracao`, `data`, `local`, `id_local`, `id_visitante`, `terminado`) VALUES ('11vs11',90,STR_TO_DATE('".$data."', '%m/%d/%Y'),".$local.",".$epquipacasa.",".$epquipafora.",0)");
        header("Refresh:0; url=../php/index.php?page=4");
    } else {
        echo "<script>alert('Ocorreu um erro ao tentar fazer o registo.')</script>";
        header("Refresh:0; url=../php/index.php?page=12");
    }
