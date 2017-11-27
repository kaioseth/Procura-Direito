<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT malt.*, ma.titulo 
			FROM materiais ma JOIN materiais_alteracao malt ON malt.id_material = ma.id
			WHERE ma.id_usuario = ".$_SESSION['id_usuario']." AND malt.alteracao_aprovada = 'P'
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

						$data_complemento = explode("-",$row['data']);
						$data_complemento = $data_complemento[2].'/'.$data_complemento[1].'/'.$data_complemento[0];

						$sql_autor = "SELECT id, nome FROM usuarios WHERE id = ".$row['id_usuario'];
						$row_autor = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_autor ) );

						$nome_autor = explode(" ",$row_autor['nome']);
						$nome_autor	= $nome_autor[0].' '.$nome_autor[count($nome_autor)-1];
?>
						<tr>
							<td>
								<?php echo $row['titulo'].' - Complemento postado por'; ?>
								<a href="<?php echo $path_raiz.'busca/?i='.$row_autor['id'] ?>">
									<?php echo $nome_autor;  ?>
								</a>
								em <?php echo $data_complemento; ?>
								<span style="float: right; cursor: pointer;" title="Visualizar complemento" onclick="abrir('complemento_view.php?id=<?php echo $row['id']; ?>')">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</span>
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