<html lang="pt-br">
	<head>
		<?php include_once("paths.php"); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4" align="right" style="margin-top: 1%; float: right; margin-right: 105px;">
					<!-- Para usuários não logados-->
					<a>
						<spam>Minha conta / Cadastrar</spam>
					</a>
					<!-- Para usuários logados acessar seus perfis 
					<a>
						<h4>Fulano da Silva</h4>
					</a>-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 7%">
					<div class="col-md-4">
						<div class="col-md-12" align="center" style="margin-top: 10%;">
							<img src="<?php echo $path_midia ?>logo.png" width="300">
						</div>
					</div>
					<div class="col-md-7" style="margin-top: 13%;">
						<h1>Procura Direito</h1>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="input_search" placeholder="O que esta procurando?">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row" align="right" style="margin-top: 10%; float: right; margin-right: 105px;">
				<div class="col-md-4">
					<button class="btn btn-default" type="submit">Novo Material</button>
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