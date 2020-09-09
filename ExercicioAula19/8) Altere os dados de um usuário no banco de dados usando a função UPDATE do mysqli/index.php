<?php
$con = mysqli_connect("localhost", "root", "","novodb");
$$atualizar_sql = 
			"UPDATE usuarios 
			SET nome='Pedro Silva', email='pedro_silva@hotmail.com' 
			WHERE id = 3";

?>