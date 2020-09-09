<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Code Universe
*
**/

// rotas normais
$commonRoutes = array(
	'/' 						=> 'UsuariosController/index',
	'usuarios/contato' 			=> 'UsuariosController/contato',
	'usuarios/servicos' 		=> 'UsuariosController/servicos',
	'usuarios/quemsomos' 		=> 'UsuariosController/quemsomos',

);

// rotas POST
$commonPost = array();

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;