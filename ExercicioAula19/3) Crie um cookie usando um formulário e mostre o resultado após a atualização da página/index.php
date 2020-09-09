<?php

	$email_cookie = isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
	$senha_cookie = isset($_COOKIE['senha']) ? $_COOKIE['senha'] : "";

	if(isset($_COOKIE['email'])){
		echo '<b>O usuário atual é  (cookie): '.$email_cookie.'</b><br><br>';
	}

	?>

	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Cookies</title>
</head>
<body>

	<fieldset>

		<legend>Login - Cookie</legend>
		
		<form action="login_cookie.php" method="post">

			<input type="text" name="email" placeholder="Informe um E-mail">	

			<br>

			<input type="password" name="senha" placeholder="Informe uma Senha">

			<br>	
			
			<input type="submit" value="Entrar">

		</form>
	</fieldset>

</body>
</html>