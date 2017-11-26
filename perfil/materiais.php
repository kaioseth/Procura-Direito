<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM materiais WHERE id_usuario = ".$_SESSION['id_usuario'];
	$res = mysqli_query( $conexao, $sql );
?>
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $path_css ?>font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>

<div class="col-md-12" align="center">
	<div class="row">
		<div class="col-md-12">
			<h3>Meus materiais postados</h3>
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

								<a onclick="remover_material(<?php echo $row['id']; ?>);">
									<span style="float: right; cursor: pointer; color: #b10000;" title="Excluir material">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</span>
								</a>

								<a href="../material/?id=<?php echo $row['id']; ?>">
									<span style="float: right; cursor: pointer; margin-right: 2%;" title="Visualizar material">
										<i class="fa fa-search-plus" aria-hidden="true"></i>
									</span>
								</a>
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

	function remover_material(id){
		// ajax de remoção
	}
</script>