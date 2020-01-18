<?php
	$login = $_POST['nome_utilizador'];
	$pass = $_POST['password_login'];
	include_once '../php/bdcon.php';
	$veificautilizador = mysqli_query($liga, "SELECT `username`, admin, treinador FROM `Users` WHERE (username='".$login."' or email='".$login."') AND `password`=SHA1('".$pass."')");
	if (mysqli_num_rows($veificaUtilizador) > 0){
			while($rows=mysqli_fetch_assoc($veificautilizador)){
				session_start();
				$_SESSION['user'] = $rows['username'];
				$_SESSION['admin'] = $rows['admin'];
				$_SESSION['treinador'] = $rows['treinador'];
				header('location: ../php/index.php');
			}
	} else {
		echo "<script>alert('Utilizador ou password errado.');
					parent.location = '../php/index.php?page=8';
					</script>";
	}
?>
