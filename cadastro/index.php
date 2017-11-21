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
<?php
			//if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
				echo 'Você ja está logado. Aproveite todos os recursos do portal.';
			//}else{
?>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-7 center-block" style="float: none;">
							<div class="col-md-12" align="center">
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
										<input type="password" class="form-control" id="confirma_senha" placeholder="Repita a senha">
									</div>
								</div>
								<div class="form-group">
									<p>
										<button type="button" class="btn btn-primary btn-sm" id="btn_cadastrar">Cadastrar</button>
										<a type="button" class="btn btn-primary btn-sm" href="<?php echo $path_raiz.'login/'; ?>" style="float: right; background-color: #ff4d4d; border: none;">
											Ja possuo uma conta
										</a>
									</p>
								</div>
							</form>
						</div>
					</div>
				</div>
<?php
			//} // fim comparação se ja está logado
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<script>
		$('#btn_cadastrar').click(function(){
			var nome 			= $('#nome').val();
			var telefone 		= $('#telefone').val();
			var email 			= $('#email').val();
			var senha 			= $('#senha').val();
			var confirma_senha 	= $('#confirma_senha').val();

			if( confirma_senha != senha ){
				alert('Senhas informadas não conferem!');
			}else{
				if( nome != '' && telefone != '' && email != '' && senha != '' && confirma_senha === senha ){
					// ajax commit
					alert('Cadastro realizado com sucesso!');
				}else{
					alert('Para realizar seu cadastro é obrigatório preencher todos os campos.');
				}
			}
		});
	</script>
</html>