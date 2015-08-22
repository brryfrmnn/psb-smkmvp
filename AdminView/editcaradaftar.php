<?php 
if (isset($_GET['key'])) {

	if (isset($_GET['id'])) {
		
	$id=(int)$_GET['id'];
	include_once '../config/koneksi.php';
	$proses=$mysqli->prepare("SELECT * FROM mvp_cara_daftar WHERE cara_daftar_id = ?");
	$proses->bind_param("i", $id);
	$proses->execute();
	$hasil=$proses->get_result();
	$data=$hasil->fetch_object();

	?>
		<form action="../proses.php" method="POST">
			<legend>Form title</legend>

			<div class="row">
				<div class="col s12 m8">
					<div class="input-field"> 
						<input type="text" name="judul" id="judul" value="<?php echo $data->cara_daftar_judul; ?>" class="validate">
						<label for="judul">Judul :</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m8">
					<div class="input-field"> 
						<textarea  name="isi" id="isi" class="materialize-textarea validate"><?php echo $data->cara_daftar_isi; ?></textarea>
						<label for="isi">Isi :</label>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col s4 m1">
					<div class="input-field"> 
						<input type="number" name="no" id="no" value="<?php echo $data->no_urut; ?>" class="validate" min="1" max="10">
						<label for="no">No Urut :</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8">
					<button type="submit" class="btn" name="ubahcaradaftar">Ubah</button>
				</div>
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			</div>
		</form>


	<?php
	}
}


 ?>