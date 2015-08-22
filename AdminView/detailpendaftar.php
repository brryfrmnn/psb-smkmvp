<?php 
if (isset($_GET['user_id'])) {

include '../config/koneksi.php';
$id=(int)$_GET['user_id'];
$proses=$mysqli->prepare("SELECT * FROM mvp_user where user_id=?");
$proses->bind_param("i", $id);

if ($proses->execute()) {
	$result=$proses->get_result();
	$data=$result->fetch_object();


 ?>
 <div class="row">

	<div class="col m4 s12">
		  <div class="input-field">
			<i class="mdi-action-account-circle prefix"></i>
			<input id="nisn" type="text" value="<?php echo $data->username; ?>" name="username" maxlength="12" readonly>
			<label for="nisn">Username :</label>
		  </div>
	</div>


 </div>


	<div class="row">
		<div class="col m4 s12">
		  <div class="input-field">
			<i class="mdi-action-face-unlock prefix"></i>
			<input id="namadepan" type="text" name="namadepan" value="<?php echo $data->nama_depan; ?>" maxlength="12"  readonly>
			<label for="namadepan">Nama Depan :</label>
		  </div>
		</div>
		<div class="col m4 s12">
		  <div class="input-field">
			<i class="prefix"></i>
			<input id="namabelakang" type="text" name="namabelakang" maxlength="20" value="<?php echo $data->nama_belakang; ?>" readonly>
			<label for="namabelakang">Nama Belakang :</label>
		  </div>
		</div>
	  </div>
		
<div class="row">
	<div class="col m4 s12">
	  <div class="input-field">
		<i class="fa fa-envelope prefix"></i>
		<input id="email" type="email" name="email" maxlength="50" value="<?php echo $data->email; ?>" readonly>
		<label for="email">Email :</label>
	  </div>
	</div>

	<div class="col m4 s12">
	  <div class="input-field">
		<i class="mdi-hardware-phone-android prefix"></i>
		<input id="hp" type="tel" value="<?php echo $data->telepon; ?>" name="hp" data-inputmask="'mask': '(9999) 999-99999'" readonly>
		<label for="hp">HP :</label>
	  </div>
	</div>
 </div>
<div class="row">
	<div class="col s12 m8">
		<button onclick="history.go(-1)"  class="btn right">KEMBALI</button>
	</div>
</div>


<?php }} ?>