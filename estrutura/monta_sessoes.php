<?php
	include_once('../paths.php');

	if( $_POST['id'] != '' && $_POST['nome'] != '' ){
		$_SESSION['codigo'] = $_POST['id'];
		$_SESSION['nome'] 	= $_POST['nome'];
		$_SESSION['imagem'] = $_POST['imagem'];
		$_SESSION['logado'] = true;

		echo 1;
	}	
?>