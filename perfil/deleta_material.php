<?php
	include_once('../paths.php');

	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	include_once('../estrutura/auditoria.php');

	$id = $_POST['id'];

	$sql_deleta_complementos = "DELETE FROM materiais_alteracao WHERE id_material = ".$id;
	if( mysqli_query( $conexao,$sql_deleta_complementos ) ){
		$sql_deleta_material = "DELETE FROM materiais WHERE id = ".$id;
		if( mysqli_query( $conexao,$sql_deleta_material ) ){
			$acao_auditoria = 'mat del';
			$descricao_auditoria = 'remocao material id '.$id;

			salva_auditoria($conexao,$_SESSION['id_usuario'],$acao_auditoria,$descricao_auditoria,null,null);

			echo 1;
		}else{
			echo 2;
		}
	}else{
		echo 3;
	}
?>