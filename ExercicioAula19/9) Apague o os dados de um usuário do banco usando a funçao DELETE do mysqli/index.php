<?php
$deletar_sql = "DELETE FROM usuarios WHERE id = 4";
		$resultado 	= mysqli_query($con, $deletar_sql);

		echo "Status: Deletado! ";
?>