<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM sugestoes WHERE id = ".$_GET['id'];
	$row = mysqli_fetch_assoc( mysqli_query( $conexao, $sql ) );
?>
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $path_css ?>font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>

<div class="col-md-12" align="center">
	<div class="row">
		<div class="col-md-12">
				<h3>Sugestões</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 center-block" style="float: none;">
				<div class="form-group">
					<input type="text" class="form-control" id="sugestao_nome" placeholder="Nome" value="<?php echo $row['nome']; ?>" disabled="disabled">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="sugestao_email" placeholder="Email" value="<?php echo $row['email']; ?>" disabled="disabled">
				</div>
				<div class="form-group">
					<textarea class="form-control" id="sugestao" placeholder="O que pode nos sugerir?" style="min-height: 100px;" disabled="disabled"><?php echo $row['texto']; ?></textarea>
				</div>
				
			</div>
		</div>
	</div>
</div>

<button type="button" class="btn btn-danger"  onclick="abrir('sugestoes.php');">Voltar</button>

<script src="<?php echo $path_js ?>jquery.min.js"></script>
<script src="<?php echo $path_js ?>bootstrap.min.js"></script>