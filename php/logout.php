<?php
    include_once '../php/sessionstart.php';
    session_destroy();
    header("Refresh:0; url=../php/index.php");
?>
