
<head>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>GDB</title>
</head>
<div id="cabecalho">
	<?php
		include '../php/header.php';
	?>
</div>
<div id="corpo">
	<?php
		include_once '../php/sessionstart.php';
		if (!isset($_GET['page'])) {
			include '../php/carrousel.php';
		}else{
			switch ($_GET['page']) {
				case 1:
					include '../php/carrousel.php';
					break;
				case 2: //TODO loja.php
					include '../php/carrousel.php';
					break;
				case 3: //TODO equipas.php
					if(!isset($_SESSION['admin']) or !$_SESSION['treinador']){
						include '../php/equipas.php';
					}else {
						if($_SESSION['admin']==true or $_SESSION['treinador']==true)
						{
							include '../php/equipasejogadores.php';
						}else{
							include '../php/equipas.php';
						}
					}
					break;
				case 4:
					include '../php/jogos.php';
					break;
				case 5:
					include '../php/contactos.php';
					break;
				case 6:
					include '../php/area_pessoal_utilizador.php';
					break;
				case 7:
					include '../php/aboutus.php';
					break;
				case 8:
					include '../html/login_utilizador_existente.html';
					break;
				case 9:
					include '../html/login_novo_utilizador.html';
					break;
				case 10:
					include '../php/treinos.php';
					break;
				default:
					include '../php/carrousel.php';
					break;
			}
		}
	?>
</div>
<div id="footer">
	<?php
		include '../html/footer.html';
	?>
</div>
