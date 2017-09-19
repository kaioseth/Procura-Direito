<html lang="pt-br">
	<head>
		<?php include_once("../paths.php"); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body style="overflow: hidden;">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="height: 60px;">
					<div class="col-md-6">
						<h3 style="margin-top: 18px;">Procura Direito</h3>
					</div>
					<div class="col-md-6" align="right">
						<div style="margin-top: 23px"><h4>Fulano da Silva</h4></div>
					</div>
				</div>
				<div class="col-md-12" align="center">
					<h3 style="height: 60px;">Solicitações de complemento</h3>
				</div>
			</div>
			<div class="row" style="height: 100%">
<?php
				for( $i = 0; $i < 3; $i++ ){ 
?>
						<div class="col-md-12" style="margin-bottom: 1%;">
							<div class="col-md-6">
								<a><span style="font-size: 16px;">Título do material <?php echo $i; ?></span></a>
							</div>
							<div class="col-md-6" align="right">
								Postado por <a>Sicrano da Silva</a> em 13/11/1993
							</div>
						</div>
<?php
				}
?>
			</div>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<!--<style>
		footer {
		    position: fixed;
		    height: 100px;
		    bottom: 0;
		    width: 100%;
		}
	</style>
	<footer class="fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright">
						© 2017, Kaio Nascimento, Todos os direitos reservados
					</div>
				</div>
			</div>
		</div>
	</footer>-->
</html>