<html lang="pt-br">
	<head>
		<?php include_once("../paths.php"); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body>
		<div class="container col-md-12">
<?php
			if( isset($_SESSION['usuario_logado']) ){
?>
				<div class="row">
					<div class="col-md-12 shadow_bottom" style="height: 70px;">
						<?php include_once('../estrutura/topo_interno.php'); ?>
					</div>
				</div>
				<div class="row" align="center">
					<div class="col-md-12 center-block" style="float: none;">
						<div class="col-md-4" style="border-right: 1px dashed black;">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-8 center-block" style="float: none; height: 350px; border:1px dashed black; margin-top: 12%;">
<?php
										$imagem_usuario = $path_midia.'perfil/'.$_SESSION['id_usuario'].'.jpg';
										if(!file_exists($imagem_usuario)){ // entra nesse if caso não exista a imagem
											$imagem_usuario = $path_midia.'perfil/avatar.png';
										}
?>
										<img src="<?php echo $imagem_usuario; ?>" style="width: 100%; height: 95%; margin-top: 4%;">
									</div>
								</div>
							</div>
<?php
							require_once('../db.php');

							$instance = new db();
							$conexao = $instance->conecta_mysql();

							$sql = "SELECT * FROM usuarios WHERE id = ".$_SESSION['id_usuario'];
							$row = mysqli_fetch_assoc(mysqli_query( $conexao, $sql ));
?>							
							<div class="row">
								<div class="col-md-12" style="margin-top: 5%;">
									<span><?php echo $row['nome']; ?></span>
									<br>
									<span><?php echo $row['email']; ?></span>
									<br>
									<br>
									<button type="button" class="btn btn-secondary" onclick="abrir('form_dados.php')">
										Alterar Dados
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-md-12" style="margin-top: 25%;" id="btns_perfil" align="center">
<?php
								$class = 'col-md-6';
								if( isset($_SESSION['usuario_administrador']) ){
									$class = 'col-md-4';
?>
									<div class="<?php echo $class; ?> center-block" align="center">
										<button type="button" class="btn btn-warning btn-lg" onclick="abrir('sugestoes.php')">
											Sugestões
										</button>
									</div>
<?php
								}
?>
								<div class="<?php echo $class; ?> center-block" align="center">
									<button type="button" class="btn btn-success btn-lg" onclick="abrir('materiais.php')">
										Meus materiais
									</button>
								</div>
								<div class="<?php echo $class; ?> center-block" align="center">
									<button type="button" class="btn btn-primary btn-lg" onclick="abrir('complementos.php')">
										Solicitações de complemento
									</button>
								</div>
							</div>

							<div class="col-md-12" id="volatil" >
								<!-- carregada por ajax -->
							</div>
						</div>
					</div>	
				</div>
<?php
			}else{
?>
				<div class="col-md-12 alert alert-danger" style="text-align: center; margin-top: 20%">
					<strong>Você não está logado!</strong> Clique <a href="<?php echo $path_raiz.'login/'; ?>">aqui</a> para ser redirecionado á página de login
				</div>
<?php
			}
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>

	<script>
		function abrir(arquivo){
			$.ajax({
				url: arquivo,
				success: function(resultado){
					$('#volatil').html(resultado);
					$('#btns_perfil').hide('slow');
					$('#volatil').show('slow');
			    },
			    error: function(resultado){
			    	console.log("Erro: "+resultado);
			    }
			});
		}
	</script>
</html>