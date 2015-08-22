<?php 
if (isset($_GET['kontak_id'])) {
	include '../config/koneksi.php';
	$id=(int)$_GET['kontak_id'];
	$proses=$mysqli->prepare("DELETE from mvp_kontak where kontak_id = ?");
	$proses->bind_param("i", $id);

	if ($proses->execute()) {
		echo "<script>document.location='index.php?key=mailbox.php'</script>";
		$_SESSION['flash']['info']="Data telah dihapus";

	}
	else
	{
		$mysqli->error;
	}
}

 ?>