<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<div id="cabecalho">
	<?php
		/*
			Condiçaõ que verifica quando o utilizador entra na página se tem sessão iniciada ou não
			Se tiver sessão iniciada inclui o topo/header com a opção "A Minha Área"
			se não tiver sessão iniciada inclui o topo/header geral.
		*/
		session_start();
		if (!isset($_SESSION['user'])) {
			include '../html/topo_geral.html';
		} else {
			include '../html/topo_sessao_iniciada.html';
		}
	?>
</div>
<div id="carrosel">
	<?php
		include '../php/carrousel.php';
	?>
</div>
=======
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<?php
	/*
		Condiçaõ que verifica quando o utilizador entra na página se tem sessão iniciada ou não
		Se tiver sessão iniciada inclui o topo/header com a opção "A Minha Área"
		se não tiver sessão iniciada inclui o topo/header geral.
	*/
	session_start();
	if (!isset($_SESSION['user'])) {
		include '../html/topo_geral.html';
	} else {
		include '../html/topo_sessao_iniciada';
	}

?>
>>>>>>> 08b8aeef0422fefc4d275461d59d9df9bd860858
