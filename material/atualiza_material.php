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

		$id_material		= $_POST['id_material'];
		$titulo 			= $_POST['titulo'];
		$id_area 			= $_POST['area_atuacao'];
		$corpo 				= $_POST['descricao'];
		$status				= $_POST['status'];
		$id_dono_material	= $_POST['id_dono'];
		$extensao_anexo		= $_POST['extensao_anexo'];
		//$observacao			= $_POST['observacao'];

		if( $id_material != '' ){
			if( $id_dono_material === $_SESSION['id_usuario'] ){ // fazendo alteração no próprio material
				$sql = "UPDATE materiais 
					    SET titulo 				= '".$titulo."',
					     	id_material_area 	= '".$id_area."',
						 	corpo 				= '".$corpo."',
						 	status 				= '".$status."'
					 	WHERE id = ".$id_material;
			}else{ // cadastrando complemento de material existente
				$sql = "INSERT INTO materiais_alteracao ( id_usuario,
														  id_material,
														  observacao,
														  alteracao_aprovada,
														  novo_corpo )
												 VALUES ( ".$_SESSION['id_usuario'].",
												 		  ".$id_material.",
												 		  '".$observacao."',
												 		  'N',
												 		  '".$corpo."' )";
			}
		}else{ // cadastrando novo material
			$sql = "INSERT INTO materiais ( id_usuario,
											titulo,
											corpo,
											data_cadastro,
											status,
											id_material_area )
								   VALUES ( ".$_SESSION['id_usuario'].",
								   			'".$titulo."',
								   			'".$corpo."',
								   			CURRENT_DATE,
								   			'".$status."',
								   			".$id_area." )";
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
		<script type="text/javascript">
			setTimeout(function(){
				window.location.href='<?php echo $path_raiz; ?>';
			},5000)
		</script>
	</body>
</html>