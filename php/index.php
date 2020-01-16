<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<div id="cabecalho">
	<?php
		include '../php/header.php';
	?>
</div>
<div id="corpo">
	<?php
		if (!isset($_GET['page'])) {
			include '../php/carrousel.php';
		}else{
			switch ($_GET['page']) {
				case 1:
					include '../php/carrousel.php';
					break;
				case 2: //TODO loja.php
					include '';
					break;
				case 3: //TODO equipas.php
					include '';
					break;
				case 4:	//TODO jogos.php
					include '';
					break;
				case 5:
					include '../php/contactos.php';
					break;
				case 6: //TODO area_utilizador.php
					include '';
					break;
				case 7: //TODO aboutus.php
					include '';
					break;
				case 8:
					include '../html/login_utilizador_existente.html';
					break;
				case 9:
					include '../html/login_novo_utilizador.html';
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