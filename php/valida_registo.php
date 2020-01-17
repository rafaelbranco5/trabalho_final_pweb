<?php
    $nome = $_POST['nome_completo'];
    $user = $_POST['nome_utilizador'];
    $email = $_POST['email'];
    $passv1 = $_POST['primeira_pass'];
    $passv2 = $_POST['segunda_pass'];

    if (isset($nome) && isset($user) && isset($email) && isset($passv1) && isset($passv2)) {
        if ($passv1 == $passv2) {
            # Ligar a base de dados dos users
            mysqli_query("Ligação a base dados dos users", "INSERT INTO user (user, nome, password, email) VALUES ('.$nome.', '.$user.', '.$passv1.', '.$email.')");
            header('location: ../php/index.php?page=8');
        } else {
            echo "<script>alert('Ocorreu um erro ao tentar fazer o seu registo. Por favor reintroduza os seus dados.')</script>";
            header('location: ../php/index.php?page=9');
        }
    }
?>