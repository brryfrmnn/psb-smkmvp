<?php 
if (isset($_GET['key'])) {
	if ($_GET['key']=='tambahcaradaftar.php') {
		?>
		<form action="../proses.php" method="POST">
			<legend>Tambah Cara Mendaftar</legend>

			<div class="row">
				<div class="col s12 m8">
					<div class="input-field"> 
						<input type="text" name="judul" id="judul" value="" class="validate">
						<label for="judul">Judul :</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m8">
					<div class="input-field"> 
						<textarea  name="isi" id="isi" class="materialize-textarea validate"></textarea>
						<label for="isi">Isi :</label>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col s4 m1">
					<div class="input-field"> 
						<input type="number" name="no" id="no" value="" class="validate" min="1" max="10">
						<label for="no">No Urut :</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8">
					<button type="submit" name="tambahcaradaftar" class="btn">Tambah</button>
				</div>
			</div>
		</form>
		<?php
	}
}


 ?>