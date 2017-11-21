<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$nome 		= $_POST['nome'];
	$email 		= $_POST['email'];
	$causa 		= $_POST['causa'];
	$mensagem 	= $_POST['mensagem'];

	$campo = " ";
	$valor = " ";

	if( $_SESSION['id_usuario'] != '' ){
		$campo = ", id_usuario";
		$valor = ", ".$_SESSION['id_usuario'];
	}

	$sql = "INSERT INTO sugestoes ( nome,
									email,
									tipo,
									texto
									".$campo."
								  )
						  VALUES ( '".$nome."',
						  		   '".$email."',
						  		   '".$causa."',
						  		   '".$mensagem."'
						  		   ".$valor."
								 )";

	if( mysqli_query( $conexao, $sql ) ){
		echo 1;
	}else{
		echo 0;
	}
?>