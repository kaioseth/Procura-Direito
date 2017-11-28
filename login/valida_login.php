<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	include_once('../estrutura/auditoria.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND senha = '".$senha."'";
	$row = mysqli_fetch_assoc(mysqli_query( $conexao, $sql ));

	if( $row['id'] != '' ){

		$_SESSION['usuario_administrador'] = false;
		if( $row['id'] == 1 ){
			$_SESSION['usuario_administrador'] = true;
		}

		$imagem_usuario = $path_midia.'perfil/'.$row['id'].'.jpg';
		if(!file_exists($imagem_usuario)){ // entra nesse if caso não exista a imagem
			$imagem_usuario = $path_midia.'perfil/avatar.png';
		}

		$nome = explode(" ",$row['nome']);

		$_SESSION['usuario_logado'] = true;
		$_SESSION['id_usuario'] 	= $row['id'];
		$_SESSION['nome_usuario']	= $nome[0].' '.$nome[count($nome)-1];
		$_SESSION['foto_usuario']	= $imagem_usuario;

		$acao_auditoria = 'usu login';
		$descricao_auditoria = 'usuario id '.$_SESSION['id_usuario'].' login in ';

		salva_auditoria($conexao,$_SESSION['id_usuario'],$acao_auditoria,$descricao_auditoria,null,null);

		$sql_atualiza_data_acesso = "UPDATE usuarios 
							         SET data_ultimo_acesso = CURRENT_TIMESTAMP
							         WHERE id = ".$_SESSION['id_usuario'];
		if( mysqli_query( $conexao, $sql_atualiza_data_acesso ) ){
			echo 1;
		}
	}else{
		echo 0;
	}
?>