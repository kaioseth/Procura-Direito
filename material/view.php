<?php
	if( isset($_SESSION['id_usuario']) ){
?>
		<div class="col-md-12"><div class="col-md-11 center-block" style="float: none; text-align: right; margin-right: 60px">
			<a style="cursor: pointer;" href="<?php echo $path_raiz.'material/?id='.$id_material.'&acao=complemento'; ?>">
				<span>Complementar material</span>
			</a>
		</div></div>
<?php
	}
?>
	<div class="col-md-12" style="margin-top: 2%;">
		<div class="col-md-11 center-block" style="float: none;">
			<form>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="titulo" value="<?php echo $value_titulo_material; ?>" disabled="disabled">
							</div>
						</div>
						<div class="col-md-6" align="right">
							<!--<div class="col-md-1">
								<a style="cursor: pointer;" title="Download anexo do material">
									<img src="<?php echo $path_midia; ?>download_a3.png" width="30">
								</a>
							</div>-->
<?php
							$sql_dono_material = "SELECT nome FROM usuarios WHERE id = ".$id_dono_material;
							$row_dono_material = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_dono_material ) );

							$nome_dono = explode(" ",$row_dono_material['nome']);

							$data_postagem = explode("-",$data_postagem_material);
							$data_postagem_material = $data_postagem[2].'/'.$data_postagem[1].'/'.$data_postagem[0];

							$sql_qtd_complementos = "SELECT COUNT(id) AS quantidade
													 FROM materiais_alteracao 
													 WHERE id_material = ".$id_material." AND alteracao_aprovada ='A'";
							$row_qtd_complementos = mysqli_fetch_assoc( mysqli_query( $conexao,$sql_qtd_complementos ) );

							$label = ' alteração';
							if( $row_qtd_complementos['quantidade'] > 1 ){
								$label = ' alterações';
							}
?>
							<span style="text-align: right;">
								Material postado por <?php echo $nome_dono[0].' '.$nome_dono[count($nome_dono)-1]; ?> em <?php echo $data_postagem_material; ?><br>
								Material sofreu <?php echo $row_qtd_complementos['quantidade'].$label; ?>
							</span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" id="descricao" style="min-height: 350px;" disabled="disabled"><?php echo $value_corpo_material; ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>