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
					<h3 style="height: 60px;">Cadastrar novo material</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="height: 100%">
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="titulo" placeholder="Como deseja chamar esse material?">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" id="area">
												<option selected="selected" disabled="">Selecione a área do material</option>
												<option>Direito Penal</option>
												<option>Direito Cívil</option>
												<option>Direito do Trabalho</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="col-md-12">
											<div class="col-md-6" align="center">
												<div class="form-group">
													<span style="font-size: 16px;">
														Status
													</span>
													<input type="radio" name="status" value="a" style="margin-left: 2%;"> Ativo
													<input type="radio" name="status" value="i"> Inativo
												</div>
											</div>
											<div class="col-md-6" align="center">
												<input type="checkbox" name="possui_anexo"> Inserir anexo
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="file" class="form-control" name="arquivo" disabled="disabled">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" id="descricao" placeholder="Insira aqui o conteúdo" style="min-height: 250px;"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group" align="right">
								<p style="margin-right: 15px;"> <button type="button" class="btn btn-primary btn-sm">Cadastrar material</button> </p>
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