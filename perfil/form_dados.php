<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM usuarios WHERE id = ".$_SESSION['id_usuario'];
	$row = mysqli_fetch_assoc(mysqli_query( $conexao, $sql ));
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">

<form enctype="multipart/form-data" action="atualiza_perfil.php" method="post" style="margin-top: 5%;">
	<div class="form-group">
		<label for="nome" style="float: left;">Nome</label>
		<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required="required">
	</div>
	<div class="form-group">
		<label for="email" style="float: left;">Email</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required="required">
		
	</div>
	<div class="form-group" style="width: 30%; float: left; margin-right: 5%">
		<label for="telefone" style="float: left;">Telefone</label>
		<input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $row['fone']; ?>" required="required">
		
	</div>
	<div class="form-group" style="width: 30%; float: left;">
		<label for="senha" style="float: left;">Senha</label>
		<input type="password" class="form-control" id="senha" name="senha" value="">
		
	</div>
	<div class="form-group" style="width: 30%; float: right">
		<label for="confirma_senha" style="float: left;">Confirmas Senha</label>
		<input type="password" class="form-control" id="confirma_senha" name="confirma_senha" value="">
		
	</div>

	<div class="form-group">
		<label for="foto" style="float: left;">Foto de perfil</label>
		<input type="file" class="form-control" name="foto" id="foto" value="">
		
	</div>

	<button type="submit" class="btn btn-success">Salvar</button>

	<button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>	
</form>

<script src="<?php echo $path_js ?>jquery.min.js"></script>
<script src="<?php echo $path_js ?>jquery.mask.min.js"></script>
<script src="<?php echo $path_js ?>bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$('#telefone').mask('(99)99999-9999');
	});

	$('#cancelar').click(function(){
			$('#volatil').hide('slow');
			$('#volatil').html('');
			$('#btns_perfil').show('slow');
		});
</script>