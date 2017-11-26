<?php
	include_once('../paths.php');

	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$id = $_POST['id'];

	$sql_deleta_complementos = "DELETE FROM materiais_complementos WHERE id_material = ".$id;
	if( mysqli_query( $conexao,$sql_deleta_complementos ) ){
		$sql_deleta_material = "DELETE FROM materiais WHERE id = ".$id;
		if( mysqli_query( $conexao,$sql_deleta_material ) ){
			echo 1;
		}else{
			echo 2;
		}
	}else{
		echo 3;
	}
?>