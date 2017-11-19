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
						<div style="float: left; ">
							<h3>Procura Direito</h3>
						</div>							
					</div>
					<div class="col-md-6" align="right">
						<div style="margin-top: 23px"><h4>Fulano da Silva</h4></div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 1%;">
				<div class="col-md-12" style="float: right; text-align: right;">
					<a><span>Complementar material</span></a>
				</div>
				<div class="col-md-12" style="margin-top: 2%;">
					<div class="col-md-10 center-block" style="float: none;">
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" id="titulo" value="nome do material" disabled="disabled">
										</div>
									</div>
									<div class="col-md-5">
										<div class="col-md-1">
											<a style="cursor: pointer;" title="Download anexo do material">
												<img src="<?php echo $path_midia; ?>download_a3.png" width="30">
											</a>
										</div>
										<div class="col-md-11" align="right">
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