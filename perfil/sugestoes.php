<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM sugestoes ORDER BY id DESC";
	$res = mysqli_query( $conexao, $sql );
?>
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $path_css ?>font-awesome.min.css">

<div class="col-md-12" align="center">
	<div class="row">
		<div class="col-md-12">
				<h3>Sugestões</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-10 center-block" style="float: none; margin-top: 4%;">
				<table class="table table-striped table-bordered">
						<tbody>
<?php
							while( $row = mysqli_fetch_assoc( $res ) ){
?>
								<tr>
									<td>
										<?php echo $row['nome']; ?>
										<span style="float: right; cursor: pointer;" title="Visualizar sugestão" onclick="abrir('sugestoes_view.php?id=<?php echo $row['id']; ?>')">
											<i class="fa fa-search-plus" aria-hidden="true"></i>
										</span>
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