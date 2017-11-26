<?php include_once('../paths.php'); ?>
<html lang="pt-br">
	<head>
		<?php include_once("../paths.php"); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
		<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>
	</head>
	<body>
<?php
		require_once('../db.php');

		$instance 	= new db();
		$conexao 	= $instance->conecta_mysql();

		$id_material		= $_POST['nome'];
		$titulo 			= $_POST['email'];
		$id_area 			= $_POST['telefone'];
		$corpo 				= $_POST['senha'];
		$status				= $_POST['confirma_senha'];
		$id_dono_material	= $_POST['confirma_senha'];
		$extensao_anexo		= $_POST['confirma_senha'];

		if( $id_material != '' ){
			if( $id_dono_material === $_SESSION['id_usuario'] ){ // fazendo alteração no próprio material
				$sql = "UPDATE usuarios 
					    SET nome 		= '".$nome."',
					     	email 		= '".$email."',
						 	fone 		= '".$fone."'
						 
					 	WHERE id = ".$_SESSION['id_usuario'];
			}else{ // cadastrando complemento de material existente
				$sql = "UPDATE usuarios 
					    SET nome 		= '".$nome."',
					     	email 		= '".$email."',
						 	fone 		= '".$fone."'
						 
					 	WHERE id = ".$_SESSION['id_usuario'];
			}
		}else{ // cadastrando novo material
			$sql = "UPDATE usuarios 
				    SET nome 		= '".$nome."',
				     	email 		= '".$email."',
					 	fone 		= '".$fone."'
					 
				 	WHERE id = ".$_SESSION['id_usuario'];
		}
		
		if( mysqli_query( $conexao, $sql ) ){
?>
			<div class="col-md-12 alert alert-success" style="text-align: center; margin-top: 20%">
				<strong>Dados armazenados com sucesso!</strong>
			</div>
<?php
		}else{
?>
			<div class="col-md-12 alert alert-danger" style="text-align: center; margin-top: 20%">
				<strong>Erro ao salvar os dados, tente novamente mais tarde!</strong>
			</div>			
<?php
		}
?>
	</body>
</html>