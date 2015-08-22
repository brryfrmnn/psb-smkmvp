<?php 
if (isset($_GET['key'])) {
	if ($_GET['key']=='hapusdokumen.php') {
		if (isset($_GET['id'])) {
			include '../config/koneksi.php';
			$id=(int)$_GET['id'];
			if ($cari=$mysqli->prepare("SELECT * FROM mvp_file_calon_siswa where file_calon_siswa_id=?")) {

				$cari->bind_param("i", $id);
				if ($cari->execute()) {
					$hasil=$cari->get_result();
					$data=$hasil->fetch_object();
					$proses=$mysqli->prepare("DELETE from mvp_file_calon_siswa where file_calon_siswa_id = ?");
					$proses->bind_param("i", $id);

					if ($proses->execute()) {

						$FilePath="../img/datacalonsiswa";
						
						$skhundpn=chown("../img/datacalonsiswa/$data->file_calon_siswa_skhun_depan",0777);
						$skhunbelkng=chown("../img/datacalonsiswa/$data->file_calon_siswa_skhun_belakang",0777);
						$akte=chown("../img/datacalonsiswa/$data->file_calon_siswa_akte",0777);
						$foto=chown("../img/datacalonsiswa/$data->file_calon_siswa_foto",0777);

						unlink("../img/datacalonsiswa/$data->file_calon_siswa_skhun_depan");
						unlink("../img/datacalonsiswa/$data->file_calon_siswa_skhun_belakang");
						unlink("../img/datacalonsiswa/$data->file_calon_siswa_akte");
						unlink("../img/datacalonsiswa/$data->file_calon_siswa_foto");
						echo "<script>document.location='index.php?key=dokumencalonsiswa.php'</script>";
						$_SESSION['flash']['info']="Data telah dihapus";

					}
					else
					{
						$mysqli->error;
					}


				}

			}


			
		}
	}
}

 ?>