<?php 
session_start(); // Menciptakan session
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	
	if (isset($_POST['login']))  //proses login
	{
		include_once 'controller/proseslogin.php';
		new proseslogin;
	}
	elseif (isset($_POST['simpanformulir'])) //proses pada pengisian formulir
	{
		include_once 'controller/datasiswa.php';	
	}
	elseif (isset($_POST['daftaruser'])) //proses saat daftar user baru
	{
		include_once 'controller/prosesdaftaruser.php';	
		new daftaruser;
	}
	elseif (isset($_POST['editformulir'])) {
		include_once 'controller/editdatasiswa.php';
	}
	elseif (isset($_POST['konfirmasi'])) {
		include_once 'controller/konfirmasi.php';
	}
	elseif (isset($_POST['seleksi'])) {
		include_once 'controller/prosesseleksi.php';
	}
	elseif (isset($_POST['editadmin'])) {
		include_once 'controller/ubahprofiladmin.php';
	}
	elseif (isset($_POST['daftaradmin'])) {
		include_once 'controller/prosesdaftaradmin.php';	
		new daftaradmin;
	}
	elseif (isset($_POST['editkuota'])) {
		include_once 'controller/proseskuota.php';
	}
	elseif (isset($_POST['tambahcaradaftar'])) {
		include_once 'controller/prosestambahcaradaftar.php';
	}
	elseif (isset($_POST['ubahcaradaftar'])) {
		include_once 'controller/prosesubahcaradaftar.php';
	}
	elseif (isset($_POST['tambahinfo'])) {
		include_once 'controller/prosestambahinfo.php';
	}
	elseif (isset($_POST['ubahinfo'])) {
		include_once 'controller/prosesubahinfo.php';
	}

	elseif (isset($_POST['tambahinfodetail'])) {
		include_once 'controller/prosestambahinfodetail.php';
	}
	elseif (isset($_POST['ubahinfodetail'])) {
		include_once 'controller/prosesubahinfodetail.php';
	}
}
 ?>