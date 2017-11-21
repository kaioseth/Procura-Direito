<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND senha = '".$senha."'";
	$row = mysqli_fetch_assoc(mysqli_query( $conexao, $sql ));

	if( $row['id'] != '' ){
		$nome = explode(" ",$row['nome']);

		$_SESSION['usuario_logado'] = true;
		$_SESSION['id_usuario'] 			= $row['id'];
		$_SESSION['nome_usuario']	= $nome[0].' '.$nome[count($nome)-1];

		//echo '<meta http-equiv="refresh" content="0;url='.$path_raiz.'">';
		echo 1;
	}else{
		echo 0;
	}
?>