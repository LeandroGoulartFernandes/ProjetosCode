<?php 

	// var_dump($_FILES);die;
	if(isset($_FILES['arquivo'])){

		$status = true;

		$nome 		= $_FILES['arquivo']['name'];

		// Definição do diretório e nome que iremos salvar o arquivo
		$diretorio 	= "upload/".$nome;
		
		
		$tamanho 	= $_FILES['arquivo']['size'];	
		$tipo 		= $_FILES['arquivo']['type'];		

		if($tamanho > 500000){

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="assets/libs/Sweetalert/sweetalert2.all.min.js"></script>
<script src="sweetalert.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

