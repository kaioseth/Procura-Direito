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
						<div style="margin-top: 18px"><a>Minha Conta / Cadastrar</a></div>
					</div>
				</div>
				<div class="col-md-12" align="center">
					<h3 style="height: 60px;">Sugestão</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="height: 100%">
					<div class="col-md-6"s style="margin-left: 25%;">
						<form style="margin-top: 10%">
							<div class="form-group">
								<input type="text" class="form-control" id="sugestao_nome" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="sugestao_email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="radio" name="sugestao_radio"> Não encontrei o que procurava
							</div>
							<div class="form-group">
								<input type="radio" name="sugestao_radio"> Sugestão sobre o portal
							</div>
							<div class="form-group">
								<input type="radio" name="sugestao_radio"> Outras
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Qual conteúdo procurava?" style="min-height: 100px;"></textarea>
							</div>
							<div class="form-group" align="right">
								<p>
									<button type="button" class="btn btn-primary btn-sm">Enviar Sugestão</button>
								</p>
							</div>
						</form>
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