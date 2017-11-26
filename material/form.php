	<form style="margin-top: 1%;" enctype="multipart/form-data" action="salva_material.php" method="post">
		<input type="hidden" name="id_material" value="<?php echo $id_material; ?>">
		<input type="hidden" name="extensao_anexo" value="<?php echo $extensao; ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="titulo" placeholder="Como deseja chamar esse material?" value="<?php echo $value_titulo_material; ?>" required="required">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="area_atuacao" required="required">
							<option selected="selected" disabled="">Selecione a área do material</option>
<?php
							while( $row_area_material = mysqli_fetch_assoc( $res_area_material ) ){
?>
								<option value="<?php echo $row_area_material['id']; ?>" <?php if( $id_area_material === $row_area_material['id'] ){ echo 'selected="selected"'; }  ?> >
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
<?php
				if( $_SESSION['id_usuario'] ){ // se usuario for o dono do material mostro campo de status e input file

				}else{ // verifico se existe anexo e mostro somente icone de anexo para download

				}
?>
				<div class="col-md-6">
					<div class="col-md-12">
						<div class="col-md-6" align="center">
							<div class="form-group">
								<span style="font-size: 16px;">
									Status
								</span>
								<input type="radio" name="status" <?php if( $status_material == 'A' || $status_material == '' ){ echo 'checked="checked"'; } ?> value="a" style="margin-left: 2%;"> Ativo
								<input type="radio" name="status"  <?php if( $status_material == 'I' ){ echo 'checked="checked"'; } ?> value="i"> Inativo
							</div>
						</div>
						<div class="col-md-6" align="center">
							<!--<input type="checkbox" name="possui_anexo"> Inserir anexo-->
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<!--<input type="file" class="form-control" name="arquivo">-->
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control" name="descricao" placeholder="Insira aqui o conteúdo" style="min-height: 250px;"><?php echo $value_corpo_material; ?></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group" align="right" style="margin-top: 1%; margin-bottom: 1%;">
			<p style="margin-right: 15px;">
				<button id="btn_cadastrar" type="button" class="btn btn-primary btn-sm">Salvar</button> 
			</p>
		</div>
	</form>