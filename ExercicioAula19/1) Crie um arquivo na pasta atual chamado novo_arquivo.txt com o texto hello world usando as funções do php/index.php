<?php
	$novo_arquivo = fopen("novo_arquivo.txt", "x");
	fwrite($novo_arquivo, "hello world");
	fclose($novo_arquivo);
?>