<?php include_once("../paths.php"); ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
		<link rel="shortcut icon" type="image/png" href="<?php echo $path_midia ?>favicon.png"/>
	</head>
	<body>
		<div class="container col-md-12">
<?php
			if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
				<div class="col-md-12 alert alert-info" style="text-align: center; margin-top: 20%">
					<strong>Você ja está logado!</strong> Clique <a href="<?php echo $path_raiz; ?>">aqui</a> para ser redirecionado á página principal
				</div>
<?php
			}else{
?>
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-12 alert alert-success" id="sucesso" style="text-align: center; display: none;">
							<strong>Bem Vindo!</strong> Seu cadastro foi realizado com sucesso<br>Aguarde e será redirecionado para a página principal.
						</div>
						<div class="col-md-12 alert alert-danger" id="falha" style="text-align: center; display: none;">
							<strong>Erro ao efeturar seu cadastro!</strong> Tente novamente em instantes.
						</div>
						<div class="col-md-12 alert alert-warning" id="cuidado" style="text-align: center; display: none;">
							<strong>Dados não conferem!</strong> Para realizar seu cadastro, todos os campos tem que estar preenchidos.<br>E os campos de senha devem estar iguais.
						</div>
						<div class="col-md-12 alert alert-warning" id="u_existente" style="text-align: center; display: none;">
							<strong>Erro ao cadastrar!</strong> Já existe um membro cadastrado com esse nome e e-mail.<br>Por favor, altere esses dados e tente novamente.
						</div>

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
										<button type="button" class="btn btn-primary btn-sm" id="btn_cadastrar">
											Cadastrar
										</button>
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
			} // fim comparação se ja está logado
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>jquery.mask.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#telefone').mask('(99)99999-9999');
		});

		$('#btn_cadastrar').click(function(){
			var nome 			= $('#nome').val();
			var telefone 		= $('#telefone').val();
			var email 			= $('#email').val();
			var senha 			= $('#senha').val();
			var confirma_senha 	= $('#confirma_senha').val();

			if( confirma_senha != senha ){
				$('#cuidado').show("slow");
				window.setTimeout(function() {
				   $('#cuidado').hide("slow");
				}, 5000);
			}else{
				if( nome != '' && telefone != '' && email != '' && senha != '' && confirma_senha === senha ){

					$.ajax({
						url: "cadastra_usuario.php",
						type: "POST",
						data : {
							nome 		: nome,
							telefone 	: telefone,
							email 		: email,
							senha 		: senha
						},
						success: function(resultado){
							console.log("sucesso: "+resultado);
							if( resultado == 1 ){
								$('#sucesso').show("slow");
								window.setTimeout(function() {
								   window.location.href='<?php echo $path_raiz; ?>';
								}, 5000);
							}else if( resultado == 2 ){
								$('#u_existente').show("slow");
								window.setTimeout(function() {
									$('#nome').val('');
									$('#nome').focus('');

									$('#email').val('');
									$('#email').focus();

								    $('#u_existente').hide("slow");
								}, 5000);
							}else{
								$('#falha').show("slow");
								window.setTimeout(function() {
								    location.reload();
								}, 5000);
							}
					    },
					    error: function(resultado){
					    	console.log("Erro: "+resultado);
					    }
					});

				}else{
					$('#cuidado').show("slow");
					window.setTimeout(function() {
					   $('#cuidado').hide("slow");
					}, 5000);
				}
			}
		});
	</script>
</html>