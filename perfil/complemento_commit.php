<?php
	include_once('../paths.php');

	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$id = $_POST['id'];
	$acao = $_POST['acao'];

	$sql_aux = "SELECT * FROM materiais_alteracao WHERE id = ".$id;
	$row_aux = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_aux ) );

	$sql_update_complementos = "UPDATE materiais_alteracao SET alteracao_aprovada = '".$acao."' WHERE id = ".$id;
	if( mysqli_query( $conexao,$sql_update_complementos ) ){
		if( $acao === 'A' ){
			$sql_altera_corpo = "UPDATE materiais SET corpo = '".$row_aux['novo_corpo']."' WHERE id = ".$row_aux['id_material'];
			if( mysqli_query( $conexao,$sql_altera_corpo ) ){
				echo 1;
			}else{
				echo 2;
			}
		}else{
			echo 1;
		}
	}else{
		echo $sql_update_complementos;
	}
?>