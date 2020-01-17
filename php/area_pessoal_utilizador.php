<?php 
    $nome = mysqli_query(link, "SELECT nome FROM user WHERE username='".$_SESSION['user']."'");
    $email = mysqli_query(link, "SELECT email FROM user WHERE username='".$_SESSION['user']."'");
?>
    <div id="area_utilizador">
        <h1>Olá <?php echo $_SESSION['user']; ?></h1>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Email: <?php echo $email;?></p>
    </div>