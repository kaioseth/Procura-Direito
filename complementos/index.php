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
							<div style="margin-top: 25px"><h4>Fulano da Silva</h4></div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 3%;" align="center">
					<div class="col-md-10 center-block" style="float: none;">
						<table class="table table-striped table-bordered">
 							<thead>
 								<tr align="center"><th colspan="3" align="center">Solicitações de Complemento</th></tr>
 								<tr>
 									<th>Título</th>
 									<th>Titular</th>
 									<th>Opções</th>
 								</tr>
 							</thead>
 							<tbody>
<?php
								for( $i = 1; $i < 11; $i++ ){ 
?>
									<tr>
										<td>
											Título do material <?php echo $i; ?>
										</td>
										<td>
											Postado por <a>Sicrano da Silva</a> em 13/11/1993
										</td>
										<td>
											Edit
										</td>
									<tr>
<?php
								}
?>
								
 							</tbody>
						</table>
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
</html>