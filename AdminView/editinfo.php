<?php 
if (isset($_GET['key'])) {
	if (isset($_GET['id'])) {
		
	$id=(int)$_GET['id'];
	include_once '../config/koneksi.php';
	$proses=$mysqli->prepare("SELECT * FROM mvp_info WHERE info_id = ?");
	$proses->bind_param("i", $id);
	$proses->execute();
	$hasil=$proses->get_result();
	$data=$hasil->fetch_object();

		?>
		<form action="../proses.php" method="POST">
	  			
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="mdi-action-assignment-late prefix"></i>
							<input id="Info" type="text" value="<?php echo $data->info_judul; ?>" name="info" maxlength="100" required>
							<label for="Info">Info Gelombang :</label>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col m8 s12">
						  <div class="input-field">
							<i class="mdi-action-assignment prefix"></i>
							<input id="Keterangan" type="text" value="<?php echo $data->info_keterangan; ?>" name="keterangan" maxlength="200" required>
							<label for="Keterangan">Keterangan :</label>
						  </div>
						</div>
					</div>

					
					<div class="row">
						<div class="col s12 m8">
							<div class="input-field">
								<button type="submit" name="ubahinfo" class="btn">SIMPAN <i class="mdi-content-send right"></i></button>
								<i class="prefix"></i>
								<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
							</div>
						</div>
					</div>
				
	  		</form>
		<?php
	}
}


 ?>