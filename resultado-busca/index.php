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
					<div class="col-md-6" align="left">
						<h3 style="height: 60px;">Nome do material</h3>	
					</div>
					<div class="col-md-6" align="right" style="margin-top: 2%">
						<a><span>Complementar material</span></a>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="height: 100%">
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="titulo" value="nome do material" disabled="disabled">
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-3">
											<span>icon download</span>
										</div>
										<div class="col-md-9" align="right">
											<span style="text-align: right;">
												Material postado por Funalo da Silva em 13/11/2000<br>
												Material sofreu X alterações
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" id="descricao" placeholder="Insira aqui o conteúdo" style="min-height: 350px;" disabled="disabled">Corpo do material</textarea>
										</div>
									</div>
								</div>
							</div>
						</form>
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