	<form style="margin-top: 1%;" enctype="multipart/form-data" action="atualiza_perfil.php" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="titulo" placeholder="Como deseja chamar esse material?">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="area_atuacao">
							<option selected="selected" disabled="">Selecione a área do material</option>
<?phph
							while( $row_area_material = mysqli_fetch_assoc( $res_area_material ) ){
?>
								<option value="<?php echo $row_area_material['id']; ?>">
									<?php echo $row_area_material['nome']; ?>
								</option>
<?php
							}
?>
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
						<textarea class="form-control" name="descricao" placeholder="Insira aqui o conteúdo" style="min-height: 250px;"></textarea>
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