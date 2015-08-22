<?php 

if (isset($_POST['editadmin'])) {
	$namadepan=addslashes($_POST['namadepan']);
	$namabelakang=addslashes($_POST['namabelakang']);
	$email=addslashes($_POST['email']);
	$telp=addslashes($_POST['telp']);
	$telp=str_replace("(", "", $telp);
	$telp=str_replace(")", "", $telp);
	$telp=str_replace("-", "", $telp);
	$telp=str_replace("_", "", $telp);
	$telp=str_replace(" ", "", $telp);
	$passlama=addslashes($_POST['passlama']);
	$passbaru=addslashes($_POST['passbaru']);
	$repass=addslashes($_POST['repass']);
	$salt="beruangitunyata";
	$id=$_SESSION['session_id'];

	if ($repass!=$passbaru) {
		$_SESSION['flash']['info']="password tidak sama";
		header("location: adminview/index.php?key=pengaturan.php");
	}
	else
	{

		#cek pass di DB dengan di textbox pass lama..
		$passlama=md5($passlama.$salt);
		$passbaru=md5($passbaru.$salt);
	
		include_once 'config/koneksi.php';	#buat koneksi ke DB
		$caripassword=$mysqli->prepare("SELECT password FROM mvp_user WHERE password=? and user_id='$id'");
		$caripassword->bind_param("s", $passlama);
		$caripassword->execute();
		$hasil=$caripassword->get_result();
		$passlama=$hasil->num_rows;
		if ($passlama>0) 
		{
			if($proses=$mysqli->prepare("UPDATE mvp_user set password=?, nama_depan=?,nama_belakang=?, email=?, telepon=? where user_id='$id'"))
			{
				$proses->bind_param("sssss", $passbaru,$namadepan,$namabelakang,$email,$telp);
				$proses->execute();
				$_SESSION['flash']['info']="Berhasil diubah";
				header("location: adminview/index.php?key=pengaturan.php");

			}
			else
			{
				$_SESSION['flash']['info']="Gagal terjadi kesalahan";
				header("location: adminview/index.php?key=pengaturan.php");
			}
			
		}
		else
		{
			$_SESSION['flash']['info']="Password lama anda salah";
			//echo $passlama->password;
			header("location: adminview/index.php?key=pengaturan.php");
		}

	}



}



 ?>