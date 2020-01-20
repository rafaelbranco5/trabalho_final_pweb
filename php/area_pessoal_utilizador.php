<?php

    include_once '../php/bdcon.php';
    $vars = mysqli_query($liga, "SELECT nome,email FROM Users WHERE username='".$_SESSION['user']."'");
    while($rowse=mysqli_fetch_assoc($vars)){
      ?>
      <head>
        <title>Área Pessoal</title>
      </head>
      <body>
        <div id="area_utilizador">
            <h1>Olá <?php echo $_SESSION['user']; ?></h1>
            <p>Nome: <?php echo $rowse['nome']; ?></p>
            <p>Email: <?php echo $rowse['email'];?></p>
        </div>
      </body>
      <?php
    }
    
    ?>
