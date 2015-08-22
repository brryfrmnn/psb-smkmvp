<!DOCTYPE html>
<html lang="en">
	
<?php include_once 'head.php'; ?>
<body>

<?php

 if (empty($_GET['key'])) 
 	{	 
		include_once 'awal.php';
	}
 else
 	{
 		switch ($_GET['key']) {
 			case 'reg':
 				include_once 'daftar.php';
 				break;
 			case 'berhasil':
 				include_once 'berhasildaftar.php';
 				break;
 			case 'konfirmasi':
 				include_once 'konfirmasi.php';
 				break;
 			case 'aktivasi':
 				include_once 'aktivasi.php';
 				break;
 			case 'berhasil_konfirmasi':
 				include_once 'controller/berhasilkonfirmasi.php';
 				break;
 			case 'cetakbuktikonfirmasi':
 				include_once 'controller/cetakbuktikonfirmasi.php';
 				break;
 			case 'tentang':
 				include_once 'tentangkami.php';
 				break;

 			default:
 				include_once 'awal.php';
 				break;
 		}
 	}

?>
<?php  include "js.php"; ?>
</body>
</html>

