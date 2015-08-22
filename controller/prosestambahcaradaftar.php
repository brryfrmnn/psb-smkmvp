<?php 
if (isset($_POST['tambahcaradaftar'])) {
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$no=$_POST['no'];
	$user_id=$_SESSION['session_id'];

	include_once 'config/koneksi.php';
	$proses=$mysqli->prepare("INSERT INTO mvp_cara_daftar values(NULL,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,'$user_id')");
	$proses->bind_param("ssi", $judul, $isi, $no);
	if($proses->execute())
	{
		$_SESSION['flash']['info']="Cara Mendaftar berhasil ditambahkan";
		echo "<script>document.location='adminview/index.php?key=pengaturan.php#caramendaftar'</script>";
	}
	else
	{
		echo $mysqli->error;
	}
	
}


 ?>