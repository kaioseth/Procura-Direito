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

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	include_once('../estrutura/auditoria.php');

	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$fone 	= $_POST['telefone'];
	$senha 	= $_POST['senha'];
	$senha2	= $_POST['confirma_senha'];

	$campo = "";
	$valor = "";

	if( $senha != '' && $senha === $senha2 ){
		$campo = ", senha = ";
		$valor = " '".$senha."' ";
	}

	$foto 					= $_FILES['arquivo']['name'];
	$upload_imagem_sucesso 	= true; // passar para false

	if( $foto != '' ){

		$diretorio = '../estrutura/midia/perfil/'.$_SESSION['id_usuario'].'.jpg';
		
		$foto_tmp = $_FILES['arquivo']['tmp_name'];

		if( move_uploaded_file( $foto_tmp, $diretorio  ) ){
			$upload_imagem_sucesso = true;
			$_SESSION['foto_usuario'] = $diretorio;
		}else{
			$upload_imagem_sucesso = false;
		}

	}else{
		$upload_imagem_sucesso = true;
	}

	$nome_ex = explode(" ",$nome);
	$_SESSION['nome_usuario'] = $nome_ex[0].' '.$nome_ex[count($nome_ex)-1];

	if( $upload_imagem_sucesso ){

		$sql_atualiza = "UPDATE usuarios 
						 SET nome 		= '".$nome."',
						     email 		= '".$email."',
							 fone 		= '".$fone."'
							 ".$campo." ".$valor."
						 WHERE id = ".$_SESSION['id_usuario'];
		if( mysqli_query( $conexao, $sql_atualiza ) ){
			$acao_auditoria = 'usu alt';
			$descricao_auditoria = 'alteracao perfil usuario';

			salva_auditoria($conexao,$_SESSION['id_usuario'],$acao_auditoria,$descricao_auditoria,null,null);
?>
			<div class="col-md-12 alert alert-success" style="text-align: center; margin-top: 20%">
				<strong>Dados alterados com sucesso!</strong>
			</div>
			<script>
				window.setTimeout(function() {
				    window.location.href='<?php echo $path_raiz.'perfil/'; ?>';
				}, 5000);
			</script>
<?php
		}else{
?>
			<div class="col-md-12 alert alert-danger" style="text-align: center; margin-top: 20%">
				<strong>Erro ao alterar seus dados, tente novamente mais tarde!</strong>
			</div>			
<?php
		}
	}else{
?>
		<div class="col-md-12 alert alert-danger" style="text-align: center; margin-top: 20%">
			<strong>Ocorreu algum problema no upload de sua foto!</strong>
		</div>
<?php
	}
?>
	</body>
</html>