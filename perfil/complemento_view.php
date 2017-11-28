<?php
	include_once('../paths.php');
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	$sql = "SELECT * FROM materiais_alteracao WHERE id = ".$_GET['id'];
	$row = mysqli_fetch_assoc( mysqli_query( $conexao, $sql ) );
?>
<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $path_css ?>font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>

<div class="col-md-12" align="center">
	<div class="row">
		<div class="col-md-12">
			<h3>Solcitação de complemento </h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 center-block" style="float: none;">
				<div class="form-group">
					<textarea class="form-control" id="sugestao" placeholder="O que pode nos sugerir?" style="min-height: 100px;" disabled="disabled"><?php echo $row['novo_corpo']; ?></textarea>
				</div>
				
			</div>
		</div>
	</div>
</div>

<button type="button" class="btn btn-success"  onclick="atualiza_complemento('A');">Aprovar</button>
<button type="button" class="btn btn-warning"  onclick="atualiza_complemento('R');">Reprovar</button>
<button type="button" class="btn btn-danger"  onclick="abrir('complementos.php');">Voltar</button>

<script src="<?php echo $path_js ?>jquery.min.js"></script>
<script src="<?php echo $path_js ?>bootstrap.min.js"></script>

<script>
	function atualiza_complemento(acao){
		$.ajax({
			url: "complemento_commit.php",
			type: "POST",
			data : {
				id : <?php echo $_GET['id']; ?>,
				acao : acao,
			},
			success: function(resultado){
				//console.log('result: '+resultado);
				if( resultado == 1 ){
					alert('Sucesso!');
					//location.reload();
				}else{
					console.log("Erro: "+resultado);	
				}
		    },
		    error: function(resultado){
		    	console.log("Error: "+resultado);
		    }
		});
	}
</script>