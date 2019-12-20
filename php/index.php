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