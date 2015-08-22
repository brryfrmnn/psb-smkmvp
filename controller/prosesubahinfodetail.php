<?php 
if (isset($_POST['ubahinfodetail'], $_POST['id'])) {
	$id=(int)$_POST['id'];
	$infodetail=addslashes($_POST['infodetail']);
	$keterangan=addslashes($_POST['keterangan']);
	$user_id=(int)$_SESSION['session_id'];
	$info=(int)$_POST['info'];

	include_once 'config/koneksi.php';
	if($proses=$mysqli->prepare("UPDATE mvp_info_detail set info_detail_judul=?,info_detail_keterangan=?, info_id=? ,admin_id='$user_id' WHERE info_detail_id=?"))
	{

		$proses->bind_param("ssii", $infodetail, $keterangan, $info, $id);
		if($proses->execute())
		{
			$_SESSION['flash']['info']="Info berhasil diubah";
			echo "<script>document.location='adminview/index.php?key=detailinfo.php&id=".$info."'</script>";
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
