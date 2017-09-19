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
				<div class="col-md-12">
					<div class="col-md-6">
						<h3 style="height: 60px;">Alterar material: <span style="color: #bbb;">Revisão de leis de desmatamento</span></h3>
					</div>
					<div class="col-md-6" align="right" style="margin-top:25px;">
						<span>Material inserido por Sicrano da Silva</span>
					</div>
				</div>
			</div>
			<div class="row" style="height: 100%">
				<div class="col-md-12"> <div class="col-md-12">
					<div class="form-group">
						<textarea style="min-height: 190px;" class="form-control" placeholder="Conteúdo atual do material" disabled="disabled"></textarea>
					</div>
				</div> </div>
				<div class="col-md-12"> <div class="col-md-12">
					<div class="form-group">
						<textarea style="min-height: 190px;" class="form-control" placeholder="Conteúdo corrigido"></textarea>
					</div>
				</div> </div>
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Por que está complementando este material?">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input style="margin-left: 10%;" type="file" class="form-control" placeholder="Deseja inserir anexo?">
						</div>
					</div>
					<div class="col-md-2" align="right">
						<div class="form-group">
						<button type="button" class="btn btn-primary btn-sm">Cadastrar</button>
						</div>
					</div>
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