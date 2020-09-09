<?php

$con = mysqli_connect("localhost", "root", "","mydb");
if (mysqli_connect_errno()) {
	echo "Conexão falhou!";mysqli_connect_error();

}else{
	echo "Conectado!";
}
		$listar_sql = "SELECT * FROM usuarios";
		$resultado 	= mysqli_query($con, $listar_sql);
		

?>