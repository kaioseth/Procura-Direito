<?php
	include_once('../paths.php');
	
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();
	
	include_once('../estrutura/auditoria.php');

	$acao_auditoria = 'usu logout';
	$descricao_auditoria = 'usuario id '.$_SESSION['id_usuario'].' login out ';

	salva_auditoria($conexao,$_SESSION['id_usuario'],$acao_auditoria,$descricao_auditoria,null,null);

	session_destroy();
?>
<script>
	alert('Logout realizado com sucesso!');
	window.location.href='<?php echo $path_raiz; ?>';
</script>