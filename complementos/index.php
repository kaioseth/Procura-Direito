<?php include_once("../paths.php"); ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body>
		<div class="container col-md-12">
<?php
			if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
				<div class="row">
					<div class="col-md-12 shadow_bottom" style="height: 40px;">
						<div class="col-md-6">
							<h3 style="margin-top: 18px;">Procura Direito</h3>
						</div>
						<div class="col-md-6" align="right">
							<div style="margin-top: 20px"><h4>Fulano da Silva</h4></div>
						</div>
					</div>
					<div class="col-md-12 shadow_bottom" align="center" style="min-height: 30px;">
						<h2>Solicitações de complemento</h2>
					</div>
				</div>
				<div class="row" style="margin-top: 2%;" align="center">
<?php
					for( $i = 1; $i < 11; $i++ ){ 
?>
						<div class="col-md-10 center-block" style="float: none;">
							<div class="col-md-12" style="margin-bottom: 1%; border-bottom: 1px dotted #c6d0d2;">
							<div class="col-md-6" style="float: left; text-align: left;">
								<a><span style="font-size: 16px;">Título do material <?php echo $i; ?></span></a>
							</div>
							<div class="col-md-6" align="right">
								Postado por <a>Sicrano da Silva</a> em 13/11/1993
							</div>
							</div>
						</div>
<?php
					}
?>
				</div>
<?php
			}else{
				echo 'Essa página é visivel somente para usuários que estejam logados!';
			}
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
</html>