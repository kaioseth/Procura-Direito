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
<?php
	require_once('../db.php');

	$instance = new db();
	$conexao = $instance->conecta_mysql();

	if( isset($_GET['b']) ){ // passando string - busco todos materiais
		$acessar = true;

		$buscar = $_GET['b'];
		$titulo = 'Resultados para busca: '.$buscar;

		$nome_dono = '';

		$sql_materiais = "SELECT mat.id, mat.titulo, mat.id_usuario, area.nome, mat.data_cadastro 
					      FROM materiais mat JOIN materiais_area area ON 
					      	   mat.id_material_area = area.id
					      WHERE mat.status = 'a' AND 
					      		( mat.titulo LIKE '%".$buscar."%' OR
					      		  area.nome LIKE '%".$buscar."%' )
					      ORDER BY mat.titulo";
	}else if( isset($_GET['i']) ){ // passando inteiro - busco materiais de usuario especifico
		$acessar = true;

		$buscar = $_GET['i'];
		$sql_nome_usuario = "SELECT nome FROM usuarios WHERE id = ".$buscar;
		$row_nome_usuario = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_nome_usuario ) );

		$nome = explode(" ",$row_nome_usuario['nome']);
		$nome = $nome[0].' '.$nome[count($nome)-1];

		$titulo = 'Materiais de: '.$nome;

		$nome_dono = $nome;

		$sql_materiais = "SELECT mat.id, mat.titulo, mat.data_cadastro 
					      FROM materiais mat 
					      WHERE mat.status = 'a' AND 
					      		mat.id_usuario = ".$buscar."
					      ORDER BY mat.titulo";
	}else{ // sem parametros não pode acessar essa pagina
		$acessar = false;
	}

	if( !$acessar ){
?>
		<div class="col-md-12 alert alert-warning" style="text-align: center; margin-top: 20%">
			<strong>Para acessar essa página, deve realizar uma busca!</strong> Clique <a href="<?php echo $path_raiz; ?>">aqui</a> para ser redirecionado á página de busca
		</div>
<?php
	}else{
?>
		<div class="container col-md-12">
			<div class="row">
				<div class="col-md-12 shadow_bottom" style="height: 70px;">
					<?php include_once('../estrutura/topo_interno.php'); ?>
				</div>
				<div class="col-md-12" align="center" style="min-height: 70px;">
					<div class="col-md-8" align="left" style="margin-top: 1%; margin-left: 2%;">
						<h4><?php echo $titulo; ?></h4>	
					</div>
					<div class="col-md-3" align="right" style="margin-top: 1%">
						<a href="<?php echo $path_raiz; ?>" style="cursor: pointer;">
							<button class="btn btn-secondary">Nova busca</button>
						</a>
					</div>
				</div>
			</div>
			<div class="row" align="center">
				<div class="col-md-11 center-block" style="float: none;">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
<?php
								if( $nome_dono != '' ){
?>
									<th>Título</th>
<?php
								}else{
?>
									<th width="70%">Título</th>
									<th width="30%">Titular</th>
<?php
								}
?>
							</tr>
						</thead>
						<tbody>
<?php
							$res_materiais = mysqli_query( $conexao,$sql_materiais );
							while( $row_materiais = mysqli_fetch_assoc( $res_materiais ) ){
?>
								<tr>
<?php
									if( $nome_dono != '' ){
?>
										<td>
											<a href="<?php echo $path_raiz; ?>material/?id=<?php echo $row_materiais['id']; ?>" style="cursor: pointer;">
												<!-- abre view material com id -->
												<?php echo $row_materiais['titulo']; ?>
											</a>
										</td>
<?php
									}else{
										$sql_dono = "SELECT id, nome FROM usuarios WHERE id = ".$row_materiais['id_usuario'];
										$row_dono = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_dono ) );

										$nome = explode(" ",$row_dono['nome']);
										$nome = $nome[0].' '.$nome[count($nome)-1];

										$data = explode("-",$row_materiais['data_cadastro']);
										$data = $data[2].'/'.$data[1].'/'.$data[0];
?>
										<td>
											<a href="<?php echo $path_raiz; ?>material/?id=<?php echo $row_materiais['id']; ?>" style="cursor: pointer;">
												<!-- abre view material com id -->
												<?php echo $row_materiais['titulo']; ?>
											</a>
										</td>
										<td>
											<!-- abre mesma pagina passando id de usuario -->
											Postado por
											<a href="<?php echo $path_raiz.'busca/?i='.$row_dono['id'] ?>">
												<?php echo $nome;  ?>
											</a>
											em <?php echo $data; ?>
										</td>
<?php
									}
?>
								</tr>
<?php
							}
?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
<?php
	}
?>
	</body>
	<script src="<?php echo $path_js ?>jquery.min.js"></script>
	<script src="<?php echo $path_js ?>bootstrap.min.js"></script>
</html>