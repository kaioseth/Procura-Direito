
	<form action="atualiza_material.php" method="post">
		<input type="hidden" name="id_material" value="<?php echo $id_material; ?>">
		<input type="hidden" name="extensao_anexo" value="<?php echo $extensao; ?>">
		<input type="hidden" name="id_dono" value="<?php echo $id_dono_material; ?>">
		<div class="col-md-10 center-block" style="float: none;">
			<div class="col-md-12"> <div class="col-md-12">
				<div class="form-group">
					<textarea style="min-height: 190px;" class="form-control" placeholder="Conteúdo atual do material" disabled="disabled"><?php echo $value_corpo_material; ?></textarea>
				</div>
			</div> </div>
			<div class="col-md-12"> <div class="col-md-12">
				<div class="form-group">
					<textarea id="conteudo_corrigido" style="min-height: 190px;" class="form-control" placeholder="Insira aqui um novo conteúdo para este material" name="descricao" required="required"></textarea>
				</div>
			</div> </div>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" id="por_que_alterou" class="form-control" placeholder="Por favor, diga ao dono do material, por que está fazendo esse complmento." name="observacao" required="required">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<!--
							<input style="margin-left: 10%;" type="file" class="form-control" placeholder="Deseja inserir anexo?">
						-->
					</div>
				</div>
				<div class="col-md-2" align="right">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm" id="btn_finaliza_alteracao">
							Cadastrar alteração
						</button>
					</div>
				</div>
			</div></div>
		</div>
	</form>