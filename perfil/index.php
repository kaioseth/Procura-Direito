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
					<div class="col-md-6" style=" margin-top: 5px;">
						<div style="float: left; width: 10%;">
							<img src="<?php echo $path_midia ?>logo.png"  width="60">
						</div>
						<div style="float: left; ">
							<h3>Procura Direito</h3>
						</div>							
					</div>
					<div class="col-md-6" align="right">
						<!--<div style="margin-top: 23px"><h4>Fulano da Silva</h4></div>-->
					</div>
				</div>
			</div>
			<div class="row" align="center">
					<div class="col-md-12 center-block" style="float: none;">
						<div class="col-md-4" style="height: 100%; border-right: 1px dashed black;">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-8 center-block" style="float: none; height: 350px; border:1px dashed black; margin-top: 12%;">
										<img src="<?php echo $path_midia.'usuario.png'; ?>" style="width: 100%; height: 100%;">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="margin-top: 5%;">
									<span>Fulado da Silva</span>
									<br>
									<span>mail@fulanodasilva.com</span>
									<br>
									<a>Alterar Dados</a>
									<br>
									<a>Alterar Imagem</a>
								</div>
							</div>
						</div>
						<div class="col-md-8" style="height: 100%;">
							<div class="col-md-12" style="margin-top: 25%;" align="center">
								<div class="col-md-4 center-block" align="center">
									<button type="button" class="btn btn-primary btn-lg">Meus materiais</button>
								</div>
								<div class="col-md-4 center-block" align="center">
									<button type="button" class="btn btn-primary btn-lg">Meus materiais</button>
								</div>
								<div class="col-md-4 center-block" align="center">
									<button type="button" class="btn btn-primary btn-lg">Meus materiais</button>
								</div>
							</div>
						</div>
					</div>	
			</div>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
</html>