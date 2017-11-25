<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$fone 	= $_POST['telefone'];
	$senha 	= $_POST['senha'];
	$senha2	= $_POST['confirma_senha'];

	$campo = "";
	$valor = "";

	if( $senha != '' && $senha === $senha2 ){
		$campo = ", '".$senha."'";
		$valor = ", senha ";
	}

	$foto 					= $_FILES["foto"];
	$upload_imagem_sucesso 	= false;

	if( $foto != '' ){

		$diretorio = $path_midia.'perfil/'.$_SESSION['id_usuario'].'.jpg';

		unlink($diretorio);

		if( move_uploaded_file($foto, $diretorio) ){
			chmod($diretorio, 0777);
			$upload_imagem_sucesso = true;
		}else{
			$upload_imagem_sucesso = false;
		}

	}else{
		$upload_imagem_sucesso = true;
	}

	$nome = explode(" ",$row['nome']);
	$_SESSION['nome_usuario']	= $nome[0].' '.$nome[count($nome)-1];

	if( $upload_imagem_sucesso ){

		$sql_atualiza = "UPDATE usuarios 
						 SET nome 		= '".$nome."',
						     email 		= '".$email."',
							 fone 		= '".$fone."'
							 ".$campo." = ".$valor."
						 WHERE id = ".$_SESSION['id_usuario'];
		if( mysqli_query( $conexao, $sql_atualiza ) ){
?>
			Dados alterados com sucesso!
<?php
		}else{
?>
			Erro ao alterar seus dados, tente novamente mais tarde!
<?php
		}
	}else{
?>
		Ocorreu algum problema no upload de sua foto!
<?php
	}
?>