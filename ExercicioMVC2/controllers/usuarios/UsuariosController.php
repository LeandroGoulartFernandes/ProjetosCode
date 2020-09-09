<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class UsuariosController extends Controller
{

	// Index normalmente se refere a página principal (desse objeto) e onde lista seus dados
	public function index()
	{	

		$this->setLayout('shared/layout.php');
		$this->view('usuarios/index.php');

	}

	public function contato(){

		$variavel = "Valores trazidos do controller";

		$this->setLayout('shared/layout2.php');
		$this->view('usuarios/contato.php', array(
			'variavel' => $variavel
		));
	}

	public function servicos(){
		$this->setLayout('shared/layout3.php');
		$this->view('usuarios/servicos.php', array(
		));
	}

}