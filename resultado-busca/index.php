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
			<div class="row">
				<div class="col-md-12 shadow_bottom" style="height: 70px;">
					<div class="col-md-6" style="margin-top: 5px;">
						<div style="float: left; width: 10%;">
							<img src="<?php echo $path_midia ?>logo.png"  width="60">
						</div>
						<div style="float: left;">
							<h3>Procura Direito</h3>
						</div>							
					</div>
					<div class="col-md-6" align="right">
						<div style="margin-top: 23px"><h4>Fulano da Silva</h4></div>
					</div>
				</div>
				<div class="col-md-12" align="center" style="min-height: 70px;">
					<div class="col-md-8" align="left" style="margin-top: 2%; margin-left: 2%;">
						<h4>Resultado busca: </h4>	
					</div>
					<div class="col-md-3" align="right">
						<img style="margin-top: 4%;" src="<?php echo $path_midia; ?>search.png" width="45">
					</div>
				</div>
			</div>
			<div class="row" align="center">
				<div class="col-md-10 center-block" style="float: none;">
					<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Título</th>
									<th>Titular</th>
								</tr>
							</thead>
							<tbody>
<?php
							for( $i = 1; $i < 11; $i++ ){ 
?>
								<tr>
									<td>
										Título do material <?php echo $i; ?>
									</td>
									<td>
										Postado por <a>Sicrano da Silva</a> em 13/11/1993
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