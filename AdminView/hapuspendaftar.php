<?php 
if (isset($_GET['user_id'])) {
	include '../config/koneksi.php';
	$id=(int)$_GET['user_id'];
	$proses=$mysqli->prepare("DELETE from mvp_user where user_id = ?");
	$proses->bind_param("i", $id);

	if ($proses->execute()) {
		echo "<script>document.location='index.php?key=pendaftar.php'</script>";
		$_SESSION['flash']['info']="Data Pendaftar telah dihapus";
	}
	else
	{
		$mysqli->error;
	}
}

 ?>