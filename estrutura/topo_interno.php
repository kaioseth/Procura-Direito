<div class="col-md-6" style="margin-top: 5px;">
	<div style="float: left; width: 10%;">
		<img src="<?php echo $path_midia ?>logo.png" width="60">
	</div>
	<div style="float: left;">
		<a href="<?php echo $path_raiz; ?>"><h3>Procura Direito</h3></a>
	</div>							
</div>
<div class="col-md-6" align="right" style="top: 20%">
<?php
	if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
		<!-- Para usuários logados acessar seus perfis -->
		<a href="<?php echo $path_raiz.'perfil/index.php'; ?>">
			<h4><?php echo $_SESSION["nome_usuario"]; ?></h4>
		</a>
<?php
	}else{
?>
		<!-- Para usuários não logados-->
		<a href="<?php echo $path_raiz.'login/'; ?>"> <spam>Minha conta / Cadastrar</spam> </a>
<?php
	}
?>
</div>
