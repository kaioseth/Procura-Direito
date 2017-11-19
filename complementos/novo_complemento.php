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
?>
				<div class="row">
					<div class="col-md-12 shadow_bottom" style="height: 70px;">
						<div class="col-md-6" style=" margin-top: 5px;">
							<div style="float: left; width: 10%;">
								<img src="<?php echo $path_midia ?>logo.png"  width="60">
							</div>
							<div style="float: left;">
								<h3>Procura Direito</h3>
							</div>		
						</div>
						<div class="col-md-6" align="right">
							<div style="margin-top: 23px"><h4><?php //echo $_SESSION['nome_usuario']; ?></h4></div>
						</div>
					</div>
					<div class="col-md-12" style="min-height: 70px;">
						<div class="col-md-6">
							<h3>Alterar material: <span style="color: #bbb;">Revisão de leis de desmatamento</span></h3>
						</div>
						<div class="col-md-6" align="right" style="margin-top:25px;">
							<span>Material inserido por Sicrano da Silva</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 1%;"><div class="col-md-10 center-block" style="float: none;">
					<div class="col-md-12"> <div class="col-md-12">
						<div class="form-group">
							<textarea style="min-height: 190px;" class="form-control" placeholder="Conteúdo atual do material" disabled="disabled"></textarea>
						</div>
					</div> </div>
					<div class="col-md-12"> <div class="col-md-12">
						<div class="form-group">
							<textarea id="conteudo_corrigido" style="min-height: 190px;" class="form-control" placeholder="Conteúdo corrigido"></textarea>
						</div>
					</div> </div>
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="por_que_alterou" class="form-control" placeholder="Por que está complementando este material?">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input style="margin-left: 10%;" type="file" class="form-control" placeholder="Deseja inserir anexo?">
							</div>
						</div>
						<div class="col-md-2" align="right">
							<div class="form-group">
							<button type="button" class="btn btn-primary btn-sm" id="btn_finaliza_alteracao">Cadastrar alteração</button>
							</div>
						</div>
					</div></div>
				</div>
				
<?php
			/*}else{
				echo 'Essa página é visivel somente para usuários que estejam logados!';
			}*/
?>
		</div>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
	<script>
		$('#btn_finaliza_alteracao').click(function(){
			if( $('#conteudo_corrigido').val() != '' && $('#por_que_alterou').val() != '' ){
				// cadastra nova alteração
			}
		});
	</script>
</html>