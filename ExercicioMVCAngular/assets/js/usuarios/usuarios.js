/**
*
* Script de perfil
*
* @author Code Universe
*
**/
(function($, URL){

	$( document ).ready(function() {
		$('.btn-outline-primary').on('click', function(){
			Swal.fire(
			  'Mensagem!',
			  'Seu e-mail foi enviado com sucesso!',
			  'success'
			);
		});
	});

})($, URL);