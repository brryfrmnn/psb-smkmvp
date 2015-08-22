<?php 
session_start();
include_once 'config/koneksi.php';
$id=$_SESSION['session_id'];
$username=$_SESSION['username'];
if (isset($_FILES['file'])) 
	{ 
		$namaFile = $_SESSION['session_id'].'-SKHUN-DPN-'.$_SESSION['username'].'-'.$_FILES['file']['name']; // berisi nama file yang sedang di file
		$tipeFile = $_FILES['file']['type']; // mime type dari file yang sedang di file, jika browser memberikan informasi ini. Contoh : image/gif, image/jpg dll
		$ukuranFile = $_FILES['file']['size']; // ukuran size file yang difile dalam byte
		$errorFile = $_FILES['file']['error']; // error code yang berhubungan dengan file yang sedang di file
		$direktori_file = "img/datacalonsiswa/$namaFile";

		if($ukuranFile > 0 or $errorFile == 0)
			{
				if($tipeFile == "image/jpeg" or $tipeFile == "image/jpg")
				{
					$move = move_uploaded_file($_FILES['file']['tmp_name'], $direktori_file );

					
					// perintah SQL untuk melakukan input data

					$cari=$mysqli->query("SELECT file_calon_siswa_id from mvp_file_calon_siswa where user_id='$id'");
					$ketemu=$cari->num_rows;
					if ($ketemu) {
						if($proses=$mysqli->prepare("UPDATE mvp_file_calon_siswa set file_calon_siswa_skhun_depan=? where user_id='$id'"))
						{
							$proses->bind_param("s", $namaFile);
							$proses->execute();
						}
						else
						{
							echo "<script>alert('Gagal Upload'); document.location = 'index.php?key=uploadfile';</script>";
						}
					}
					else
					{
						if($proses=$mysqli->prepare("INSERT INTO mvp_file_calon_siswa (file_calon_siswa_skhun_depan,user_id, created_at) values (?,'$id', CURRENT_TIMESTAMP)")){
							$proses->bind_param("s", $namaFile);
							$proses->execute();
						}
						else
						{
							echo "<script>alert('Gagal Upload'); document.location = 'index.php?key=uploadfile';</script>";
						}
						
					}
					
			}
			else
			{
				echo "<script>alert('masukan dokumen JPG'); document.location = 'index.php?key=uploadfile'; </script>";
			}

		
	 	}
	 	else
			{
				echo "<script>alert('masukan dokumen'); document.location = 'index.php?key=uploadfile'; </script>";
			}
	}

 ?>