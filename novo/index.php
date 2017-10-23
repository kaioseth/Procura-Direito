<?php include_once("../paths.php"); ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $path_css ?>padrao.css">
		<link rel="stylesheet" href="<?php echo $path_css ?>bootstrap.min.css">
	</head>
	<body style="overflow: hidden;">
		<div class="container col-md-12">
<?php
			//if( isset($_SESSION["usuario_logado"]) ){ // retorna true caso exista valor na sessão
?>
				<div class="row">
					<div class="col-md-12 shadow_bottom" style="height: 60px;">
						<div class="col-md-6">
							<h3 style="margin-top: 18px;">Procura Direito</h3>
						</div>
						<div class="col-md-6" align="right">
							<div style="margin-top: 23px"><h4>Fulano da Silva</h4></div>
						</div>
					</div>
					<div class="col-md-12 shadow_bottom" align="center" style="min-height: 70px;">
						<h2>Cadastrar novo material</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 center-block" style="float: none;">
						<form style="margin-top: 3%;">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="titulo" placeholder="Como deseja chamar esse material?">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" id="area_atuacao">
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
													<input type="radio" name="status" value="a" style="margin-left: 2%;" onclick="muda_status('A');"> Ativo
													<input type="radio" name="status" value="i" onclick="muda_status('I');"> Inativo
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

							<div class="form-group" align="right" style="margin-top: 1%; margin-bottom: 1%;">
								<p style="margin-right: 15px;">
									<button id="btn_cadastrar" type="button" class="btn btn-primary btn-sm">Cadastrar material</button> 
								</p>
							</div>
						</form>
					</div>
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
		var status = '';
		function muda_status(aux){
			status = aux;
		}

		$('#btn_cadastrar').click(function(){
			var titulo 	= $('#titulo').val();
			var area 	= $('#area_atuacao').val();
			var corpo 	= $('#descricao').val();
			if( titulo != '' && area != '' && status != ''&& corpo != '' ){
				// ajax novo material
			}else{
				alert('Para prosseguir é obrigatório preencher todos os campos!');
			}
		});
	</script>
</html>