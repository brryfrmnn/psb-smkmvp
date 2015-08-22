<?php 
if (isset($_POST['ubahinfo'], $_POST['id'])) {
	$id=$_POST['id'];
	$info=$_POST['info'];
	$keterangan=$_POST['keterangan'];
	$user_id=$_SESSION['session_id'];

	include_once 'config/koneksi.php';
	if($proses=$mysqli->prepare("UPDATE mvp_info set info_judul=?,info_keterangan=? ,user_id='$user_id' WHERE info_id=?"))
	{

		$proses->bind_param("ssi", $info, $keterangan, $id);
		if($proses->execute())
		{
			$_SESSION['flash']['info']="Info berhasil diubah";
			echo "<script>document.location='adminview/index.php?key=pengaturan.php#info'</script>";
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
