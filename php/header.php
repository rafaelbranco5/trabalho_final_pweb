<meta charset="utf-8">
<<<<<<< HEAD
=======
<link rel="stylesheet" type="text/css" href="../css/styles.css">
>>>>>>> master
<body>
<div>
	<div id="logo">
		<img src="../images/gdb_75.png">
	</div>

	<div id="menu">
		<nav>
			<ul>
				<li><a href="?page=1">Inicio</a></li>
				<li><a href="?page=2">Loja</a></li>
				<li><a href="?page=3">Equipas</a></li>
				<li><a href="?page=4">Jogos</a></li>
				<li><a href="?page=5">Contactos</a></li>
				<?php 
					if (isset($_SESSION['user'])) { ?>
						<li><a href="?page=6">A Minha Área</a></li>
					<?php }
				?>
				<li><a href="?page=7">Sobre Nós</a></li>
<<<<<<< HEAD
				<li><a href="?page=8">Log In</a></li>
=======
				<?php
					if (isset($_SESSION['user'])) { ?>
						<li><a href="../php/logout.php">Log Out</a></li>
			<?php	} else { ?>
						<li><a href="?page=8">Log In</a></li>
			<?php	} ?>
>>>>>>> master
			</ul>
		</nav>
	</div>
</div>
</body>