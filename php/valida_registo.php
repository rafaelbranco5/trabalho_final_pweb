<?php
    $nome = $_POST['nome_completo'];
    $user = $_POST['nome_utilizador'];
    $email = $_POST['email'];
    $passv1 = $_POST['primeira_pass'];
    $passv2 = $_POST['segunda_pass'];

    include '../php/bdcon.php';

    if (isset($nome) && isset($user) && isset($email) && isset($passv1) && isset($passv2)) {
        if ($passv1 == $passv2) {
            # Ligar a base de dados dos users
            mysqli_query($liga, "INSERT INTO `Users` (nome, `username`, `password`, email,admin,treinador) VALUES ('".$nome."','".$user."', sha1('".$passv1."'),'".$email."',0,0)");
            echo "<script>alert('Registado!')</script>";
            header('location: ../php/index.php?page=8');
        } else {
            echo "<script>alert('Ocorreu um erro ao tentar fazer o seu registo. Por favor reintroduza os seus dados.')</script>";
            header('location: ../php/index.php?page=9');
        }
    }
?>
