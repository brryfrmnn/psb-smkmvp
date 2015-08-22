<?php 
if (isset($_POST['editkuota'])) {
	include_once 'config/koneksi.php';

	$kuota=(int)$_POST['kuota'];
	$passing_grade=addslashes($_POST['passgrade']);


	$proses=$mysqli->query("UPDATE mvp_kuota set kuota='$kuota', passing_grade='$passing_grade' where kuota_id = 1");
	if ($proses)
	{	
	$_SESSION['flash']['info']="Kuota berhasil diubah";
	header("location: adminview/index.php?key=pengaturan.php");
		
	}
}



 ?>