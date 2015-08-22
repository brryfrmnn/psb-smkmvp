<?php 
if (isset($_GET['key'])) {
	if (isset($_GET['id'])) {
		if ($_GET['key']=='hapusinfodetail.php') {
				
			include '../config/koneksi.php';
			if (isset($_GET['info'])) {
				$info=$_GET['info'];
				$id=(int)$_GET['id'];
				$proses=$mysqli->prepare("DELETE from mvp_info_detail where info_detail_id = ?");
				$proses->bind_param("i", $id);

				if ($proses->execute()) {
					echo "<script>document.location='index.php?key=detailinfo.php&id=".$info."'</script>";
					$_SESSION['flash']['info']="Berhasil dihapus";
				}
				else
				{
					$mysqli->error;
				}

			}
		}
	}
}


 ?>