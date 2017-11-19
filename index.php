<?php include_once("paths.php"); ?>
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
				<div class="col-md-4" align="right" style="margin-top: 1%; float: right; margin-right: 20px;">
<?php
					if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
						<!-- Para usuários logados acessar seus perfis -->
						<a href="#">
							<h4><?php echo $_SESSION["nome_usuario"]; ?></h4>
						</a>
<?php
					}else{
?>
						<!-- Para usuários não logados-->
						<a href="<?php echo $path_raiz.'login/'; ?>"> <spam>Minha conta / Cadastrar</spam> </a>
<?php
					}
?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 4%">
					<div class="col-md-4">
						<div class="col-md-12" align="center" style="margin-top: 10%;">
							<img src="<?php echo $path_midia ?>logo.png" width="300">
						</div>
					</div>
					<div class="col-md-8" style="margin-top: 13%;">
						<h1>Procura Direito</h1>
						<div style="width: 80%; float: left;">
							<form>
								<div class="form-group">
									<input type="text" class="form-control" id="input_search" placeholder="O que esta procurando?">
								</div>
							</form>
						</div>
						<div style="width: 15%; float: left;" align="center">
							<button type="button" class="btn btn-primary btn-sm" id="btn_buscar">Buscar</button>
						</div>
					</div>
				</div>
			</div>
<?php
			if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
				<div class="row" align="right" style="margin-top: 10%; float: right; margin-right: 20px; margin-bottom: 1%;">
					<div class="col-md-4">
						<a href="<?php echo path_raiz.'novo/'; ?>" class="btn btn-default" type="button">Novo Material</button>
					</div>
				</div>
<?php
			}
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<script>
		$('#btn_buscar').click(function(){
			if( $('#input_search').val() != '' ){
				busca_conteudo();
			}
		});

		// fazer chamar metodo busca_conteudo caso pressione o enter também
		function busca_conteudo(){
			var buscar = $('#input_search').val();
			// passa por post string para resultado-busca
		}

		function teste(){
			$.ajax({
				url: "http://127.0.0.1:8000/usuario/cadastrar",
				crossDomain: true,
				//headers: {'X-Requested-With': 'XMLHttpRequest'},
				type: "GET",
		        //dataType: 'json',
	  			//dataType: 'jsonp',
				success: function(resultado){
		        	console.log("aqui: "+resultado);
			    },
			    error: function(res){
			    	console.log("erro: "+res);
			    }
			});
		}

		teste();
	</script>
</html>