<?php 
if (isset($_GET['key'])) {

	if (isset($_GET['kontak_id'])) {
		
	$id=(int)$_GET['kontak_id'];
	include_once '../config/koneksi.php';
	$proses=$mysqli->prepare("SELECT * FROM mvp_kontak WHERE kontak_id = ?");
	$proses->bind_param("i", $id);
	$proses->execute();
	$hasil=$proses->get_result();
	$data=$hasil->fetch_object();

	?>
<div class="col s12">
	<div class="row">
		<div class="input-field col s4">
			<i class="mdi-action-face-unlock prefix"></i>
            <input id="nama" type="text" maxlength="30" name="nama" value="<?php echo $data->kontak_nama ?>"  class="validate" readonly  />
            <label for="namadepan1">Nama :</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s8">
			<i class="fa fa-envelope prefix"></i>
            <input id="email" type="text" maxlength="30" name="email" value="<?php echo $data->kontak_email ?>" class="validate" readonly  />
            <label for="email">Email :</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s4">
			<i class="mdi-hardware-phone-android prefix"></i>
            <input id="telp" type="text" maxlength="14" name="telp" value="<?php echo $data->kontak_telp ?>"  class="validate" readonly  data-inputmask="'mask': '(9999) 999-99999'"  />
            <label for="telp">Telepon :</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s8">
			<i class="fa fa-envelope prefix"></i>
            <TEXTAREA id="pesan" class="materialize-textarea" readonly><?php echo $data->kontak_pesan ?>"</TEXTAREA>
            <label for="pesan">Pesan :</label>
		</div>
	</div>


</div>
<?php 
		}
}

 ?>