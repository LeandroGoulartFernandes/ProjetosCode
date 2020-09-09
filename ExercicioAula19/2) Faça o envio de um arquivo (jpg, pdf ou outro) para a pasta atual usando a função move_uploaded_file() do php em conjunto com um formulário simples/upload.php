<?php 

	// var_dump($_FILES);die;
	if(isset($_FILES['arquivo'])){

		$status = true;

		$nome 		= $_FILES['arquivo']['name'];

		// Definição do diretório e nome que iremos salvar o arquivo
		$diretorio 	= "upload/".$nome;
		
		
		$tamanho 	= $_FILES['arquivo']['size'];	
		$tipo 		= $_FILES['arquivo']['type'];		

		if($tamanho > 5000000){

			echo "Tamanho de imagem não suportado.";

			$status = false;

		}		

		// Verifica se a extensão (tipo) do arquivo é permitida

		$extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

		if($extensao != 'jpg' && $extensao != 'png' && $extensao != 'gif'){

			echo "Extensão do arquivo não permitido.";

			$status = false;
		}

		if($status){

			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio)){

				echo "Upload realizado com sucesso!";
			}else{

				echo "Não foi possível realizar o upload!";

			}

		}

	}else{

		echo "É necessário enviar um arquivo!";

	}
?>