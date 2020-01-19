<?php
	$login = $_POST['nome_utilizador'];
	$pass = $_POST['password_login'];
	include_once '../php/bdcon.php';
	$vusr = mysqli_query($liga, "SELECT `username`, admin, treinador FROM `Users` WHERE (username='".$login."' or email='".$login."') AND `password`=SHA1('".$pass."')");
	if ($vn=mysqli_num_rows($vusr) > 0){
			while($rows=mysqli_fetch_assoc($vusr)){
				include_once '../php/sessionstart.php';
				$_SESSION['user'] = $rows['username'];
				$_SESSION['admin'] = $rows['admin'];
				$_SESSION['treinador'] = $rows['treinador'];
				header("Refresh:0; url=../php/index.php");
			}
	} else {
		echo "<script>alert('Utilizador ou password errado.');
					parent.location = '../php/index.php?page=8';
					</script>";
	}
?>
