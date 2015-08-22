<?php 
if (isset($_GET['key'])) {
	if ($_GET['key']=='hapuskonfirmasi.php') {
		if (isset($_GET['id'])) {
			include '../config/koneksi.php';
			$id=(int)$_GET['id'];
			$proses=$mysqli->prepare("DELETE from mvp_konfirmasi where konfirmasi_id = ?");
			$proses->bind_param("i", $id);

			if ($proses->execute()) {
				echo "<script>document.location='index.php?key=datakonfirmasi.php'</script>";
				$_SESSION['flash']['info']="Data telah dihapus";

			}
			else
			{
				$mysqli->error;
			}
		}
	}
}

 ?>