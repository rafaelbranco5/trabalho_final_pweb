<?php
	$login = $_POST['nome_utilizador'];
	$pass = $_POST['password_login'];

	# Ligar a base de dados dos users
	$veificaUtilizador = mysqli_query("ligação BD users", "SELECT user, password FROM user WHERE username='".$login."' AND password='".$pass."'");
	
	if (mysqli_num_rows($veificaUtilizador) {
		session_start();
		$_SESSION['user'] = $login;
		header('location: ../php/index.php');
	} else {
		echo "	<script>
				alert('Utilizador ou password errado.');
				parent.location = '../php/index.php?page=8';
				</script>";
	}
?>