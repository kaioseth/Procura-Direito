	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="form-group">
					<spam> <?php echo $row['titulo']; ?> </spam>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<spam> <?php echo $row_area_material_view['nome']; ?> </spam>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<!-- aqui ficava input file -->
					<a href="" download="<?php echo $row['titulo']; ?>">
						<i class="fa fa-file" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="form-group">
					<spam> <?php echo $row['corpo']; ?> </spam>
				</div>
			</div>
		</div>
	</div>