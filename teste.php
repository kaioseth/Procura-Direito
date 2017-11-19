<?php
	require_once('db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM usuarios";

	if( mysqli_query( $conexao, $sql ) ){
	    echo 'Conexão Efetuada com Sucesso!';
	}else{
	    echo 'Erro ao conectar!';
	}
?>