<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT malt.* 
			FROM materiais ma JOIN materiais_alteracao malt ON malt.id_material = ma.id
			WHERE ma.id_usuario = ".$_SESSION['id_usuario']." AND malt.alteracao_aprovada = 'N'
			ORDER BY malt.data DESC";
	$res = mysqli_query( $conexao, $sql );
?>
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $path_css ?>font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>

<div class="col-md-12" align="center">
	<div class="row">
		<div class="col-md-12">
			<h3>Solicitações de complementos</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 center-block" style="float: none; margin-top: 4%;">
			<table class="table table-striped table-bordered">
				<tbody>
<?php
					$vazio = true;

					while( $row = mysqli_fetch_assoc( $res ) ){
						$vazio = false;
?>
						<tr>
							<td>
								<?php echo $row['titulo']; ?>
							</td>
						<tr>
<?php
					}
					if( $vazio ){
?>
						<tr>
							<td align="center">
								Nenhum registro encontrado!
							</td>
						<tr>
<?php
					}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<button type="button" class="btn btn-danger" id="cancelar">Voltar</button>

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