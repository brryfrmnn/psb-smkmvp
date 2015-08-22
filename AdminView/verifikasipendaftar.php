<?php 
if (isset($_GET['user_id'])) {

include '../config/koneksi.php';
$id=(int)$_GET['user_id'];
$proses=$mysqli->prepare("UPDATE mvp_user set status_konfirmasi='1' where user_id=?");
$proses->bind_param("i", $id);

if ($proses->execute()) {
	echo "<script>document.location='index.php?key=pendaftar.php'</script>";
 }
 else
	{
		$mysqli->error;
	}

} ?>