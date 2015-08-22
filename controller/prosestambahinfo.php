<?php 
if (isset($_POST['tambahinfo'])) {
	$info=$_POST['info'];
	$keterangan=$_POST['keterangan'];
	$user_id=$_SESSION['session_id'];

	include_once 'config/koneksi.php';
	$proses=$mysqli->prepare("INSERT INTO mvp_info values(NULL,?,?,'$user_id',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");
	$proses->bind_param("ss", $info, $keterangan);
	if($proses->execute())
	{
		$_SESSION['flash']['info']="Info berhasil ditambahkan";
		echo "<script>document.location='adminview/index.php?key=pengaturan.php#info'</script>";
	}
	else
	{
		echo $mysqli->error;
	}
	
}


 ?>