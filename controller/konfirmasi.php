<?php 
if (empty($_SESSION['session_id'])) {
	header("location: adminview/login.php");
}

$bank = $_POST['bank'];
$norek= $_POST['norek'];
$atasnama = $_POST['atasnama'];
$user_id = $_SESSION['session_id'];

include_once 'config/koneksi.php';

$proses=$mysqli->query("INSERT INTO mvp_konfirmasi values('','$user_id','$bank','$norek','$atasnama',CURRENT_TIMESTAMP)");
if ($proses) {
	header("location: index.php?key=berhasil_konfirmasi");
}
else
{
	echo "Terjadi Kesalahan.. <br>".$mysqli->error;
}

 ?>