<?php

	class Carros {
		function Carros () {
			$this->model = "BMW";
		}
	}

	$carros = new Carros();

	echo $carros->model;

?>