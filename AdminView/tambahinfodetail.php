<?php 
if (isset($_GET['key'], $_GET['id'])) {
	if ($_GET['key']=='tambahinfodetail.php') {

		?>
		<form action="../proses.php" method="POST">
	  			
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="mdi-action-assignment-late prefix"></i>
							<input id="Info" type="text" name="info" maxlength="100" required>
							<label for="Info">Info Detail Gelombang :</label>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col m8 s12">
						  <div class="input-field">
							<i class="mdi-action-assignment prefix"></i>
							<input id="Keterangan" type="text" name="keterangan" maxlength="200" required>
							<label for="Keterangan">Keterangan :</label>
						  </div>
						</div>
					</div>

					
					<div class="row">
						<div class="col s12 m8">
							<div class="input-field">
								<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
								<button type="submit" name="tambahinfodetail" class="btn">SIMPAN <i class="mdi-content-send right"></i></button>
								<i class="prefix"></i>
							</div>
						</div>
					</div>
				
	  		</form>
		<?php
	}
}


 ?>