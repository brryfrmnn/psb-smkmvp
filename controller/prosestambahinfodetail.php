<?php 
if (isset($_POST['tambahinfodetail'])) {
	$info=$_POST['info'];
	$keterangan=$_POST['keterangan'];
	$user_id=$_SESSION['session_id'];
	$id=(int)$_POST['id'];

	include_once 'config/koneksi.php';
	$proses=$mysqli->prepare("INSERT INTO mvp_info_detail values(NULL,?,?,?,'$user_id',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");
	$proses->bind_param("ssi", $info, $keterangan,$id);
	if($proses->execute())
	{
		$_SESSION['flash']['info']="Info berhasil ditambahkan";
		echo "<script>document.location='adminview/index.php?key=tambahinfodetail.php&id=$id'</script>";
	}
	else
	{
		echo $mysqli->error;
	}
	
}


 ?>