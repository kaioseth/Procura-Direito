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
				<div class="col-md-12">
					<div class="col-md-6" style="margin-left: 25%">
						<div class="col-md-12" align="center" style="margin-top: 2%;">
							<img src="<?php echo $path_midia ?>logo.png" width="300">
						</div>
						<form style="margin-top: 5%">
							<div class="form-group">
								<input type="text" class="form-control" id="nome" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="telefone" placeholder="Telefone">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div style="width: 48%; float: left;">
								<div class="form-group">
									<input type="password" class="form-control" id="senha" placeholder="Senha">
								</div>	
							</div>
							<div style="width: 48%; float: right;">
								<div class="form-group">
									<input type="password" class="form-control" id="confirm_pass" placeholder="Repita sua senha">
								</div>
							</div>
							<div class="form-group">
								<p>
									<button type="button" class="btn btn-primary btn-sm">Cadastrar</button>
									<button type="button" class="btn btn-primary btn-sm">Ja possuo uma conta</button>
								</p>
							</div>
						</form>
					</div>

					<!--<div class="col-md-6">
						<div style="margin-top: 10%; margin-left: 5%;">
							<div class="row" style="margin-left: 1%; margin-top: 25%;">
								<div class="col-md-12">
									<img src="<?php echo $path_midia ?>fb_logo.png" width="150">
									<button style="width: 55%; margin-left: 5%;" type="button" class="btn btn-primary btn-sm">
										Acessar com o facebook
									</button>
								</div>	
							</div>


							<div class="row" style=" margin-top: 7%;">
								<div class="col-md-12" style="margin-top: 5%">
									<img src="<?php echo $path_midia ?>g_logo.png" width="180">
									<button style="width: 55%; margin-left: 2%;" type="button" class="btn btn-primary btn-sm">
										Acessar com o google
									</button>
								</div>	
							</div>
						</div>
					</div>-->
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