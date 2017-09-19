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
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="col-md-12" align="center" style="margin-top: 10%;">
						<img src="<?php echo $path_midia ?>logo.png" width="300">
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">E-mail</span>
						<input type="email" class="form-control" placeholder="exemplo@email.com" aria-describedby="basic-addon1">
					</div>
					<div class="input-group" style="margin-top: 3%;">
						<span class="input-group-addon" id="basic-addon1">Senha</span>
						<input type="password" class="form-control" placeholder="senha" aria-describedby="basic-addon2">
					</div>
					<input type="button" class="btn" style="margin-top: 3%; width: 100%" value="Entrar">
					<div class="col-md-12" style="margin-top: 3%;">
						<div class="col-md-6" align="left">
							<a>
								<img src="<?php echo $path_midia ?>fb_logo.png" width="30">
							</a>
							<a>
								<img src="<?php echo $path_midia ?>g_logo.png" width="30">
							</a>
						</div>
						<div class="col-md-6" align="right" style="margin-top: 5px">
							<a href=""><span>Não possuo cadastro</span></a><!-- enviar para pagina de cadastro -->
						</div>
					</div>					
				</div>
				<div class="col-md-4"></div>
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