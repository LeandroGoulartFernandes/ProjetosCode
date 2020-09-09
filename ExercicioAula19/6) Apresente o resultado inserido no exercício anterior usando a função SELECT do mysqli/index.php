<?php
// 6) Apresente o resultado inserido no exercício anterior usando a função SELECT do mysqli 
$con = mysqli_connect("localhost", "root", "","novodb");
$select = mysqli_query($con, "SELECT * FROM usuarios WHERE nome = 'Joana'");
while($data = mysqli_fetch_array($select)) {
	$usuariosid = $data ['id'];
	$nomeid = $data ['nome'];
	echo "$usuariosid";
}

$con = mysqli_connect("localhost", "root", "","novodb");

?>