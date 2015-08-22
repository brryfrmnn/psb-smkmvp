<?php 
include_once 'config/koneksi.php';
$proses = $mysqli->query("SELECT mvp_konfirmasi.*, mvp_user.username, mvp_user.nama_depan, mvp_user.nama_belakang, mvp_user.email from mvp_konfirmasi, mvp_user where mvp_user.user_id=$_SESSION[session_id] and mvp_user.user_id=mvp_konfirmasi.user_id");
if ($proses) {
	$data=$proses->fetch_object();
	if ($data->konfirmasi_nama_bank=='bca') {
		$bank="BCA";
	}elseif ($data->konfirmasi_nama_bank=='man') {
		$bank="Mandiri";
	}elseif ($data->konfirmasi_nama_bank=='bri') {
		$bank="BRI";
	}elseif ($data->konfirmasi_nama_bank=='bni') {
		$bank="BNI";
	}else
	{
		$abnk="Lainnya";
	}
	date_default_timezone_set("Asia/Jakarta");
	require_once 'view/cetakbuktikonfirmasiview.php';

}
else
{
	echo "Terjadi kesalahan atau data tidak ada ".$mysqli->error;
}
 ?>