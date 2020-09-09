<?php
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	setcookie('email', $email);
	setcookie('senha', sha1($senha));
	echo "Logado com sucesso!";

?>

