<?php 
if (isset($_GET['key'])) {
	if (isset($_GET['id'])) {
		include '../config/koneksi.php';
		$id=(int)$_GET['id'];
		$proses=$mysqli->prepare("DELETE from mvp_cara_daftar where cara_daftar_id = ?");
		$proses->bind_param("i", $id);

		if ($proses->execute()) {
			echo "<script>document.location='index.php?key=pengaturan.php#caramendaftar'</script>";
			$_SESSION['flash']['info']="Cara Daftar telah dihapus";
		}
		else
		{
			$mysqli->error;
		}
	}
}


 ?>