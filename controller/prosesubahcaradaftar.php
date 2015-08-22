<?php 
if (isset($_POST['ubahcaradaftar'], $_POST['id'])) {
	$id=$_POST['id'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$no=$_POST['no'];
	$user_id=$_SESSION['session_id'];

	include_once 'config/koneksi.php';
	if($proses=$mysqli->prepare("UPDATE mvp_cara_daftar set cara_daftar_judul=?,cara_daftar_isi=?,no_urut=?,user_id='$user_id' WHERE cara_daftar_id=?"))
	{

		$proses->bind_param("ssii", $judul, $isi, $no, $id);
		if($proses->execute())
		{
			$_SESSION['flash']['info']="Cara Mendaftar berhasil diubah";
			echo "<script>document.location='adminview/index.php?key=pengaturan.php#caramendaftar'</script>";
		}
		else
		{
			echo $mysqli->error;
		}
	}
	else
	{
		echo $mysqli->error;
	}

	
}


 ?>