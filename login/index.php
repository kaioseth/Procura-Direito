<?php include_once("../paths.php"); ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body>
		<div class="container col-md-12">
			<div class="row">
				<div class="col-md-5 center-block" style="float: none;">
					<div class="col-md-12" align="center" style="margin-top: 8%;">
						<img src="<?php echo $path_midia ?>logo.png" width="300">
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1" for="email">E-mail</span>
						<input id="email" type="email" class="form-control" placeholder="exemplo@email.com" aria-describedby="basic-addon1">
					</div>
					<div class="input-group" style="margin-top: 3%;">
						<span class="input-group-addon" id="basic-addon1" for="senha">Senha</span>
						<input id="senha" type="password" class="form-control" placeholder="senha" aria-describedby="basic-addon2">
					</div>
					<input type="button" id="btn_entrar" class="btn btn-primary" style="margin-top: 3%; width: 100%" value="Entrar">
					<div class="col-md-12" style="margin-top: 3%;">
						<div class="col-md-6" align="left" style="margin-top: -10px;">
							<a style="margin-left: -40px;">
								<img src="<?php echo $path_midia ?>fb_2_logo.png" width="48">
							</a>
							<a>
								<img src="<?php echo $path_midia ?>g_logo.png" width="30">
							</a>
						</div>
						<div class="col-md-6" align="right" style="margin-top: 5px">
							<a href="<?php echo $path_raiz.'cadastro/'; ?>" style="margin-right: -26px;"><span>Não possuo cadastro</span></a><!-- enviar para pagina de cadastro -->
						</div>
					</div>					
				</div>
			</div>					
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<script>
		$('#btn_entrar').click(function(){
			if( $('#email').val() != '' && $('#senha').val() != '' ){
				// valida login
			}
		});
	</script>
</html>