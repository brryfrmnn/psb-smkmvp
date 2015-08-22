<?php 
include_once '../controller/validation.php';
$cek = new validation;
if ($cek->cek_session() == false) {
	header("location: login.php");
}
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<?php include_once 'head.php'; ?>
<body <?php if (isset($_SESSION['flash']['info'])) {
	$pesan=$_SESSION['flash']['info'];
	echo "onload=\"Materialize.toast('$pesan', 4000)\"";
	unset($_SESSION['flash']['info']);
} ?>>

<?php include_once 'navbar.php'; ?>

<?php
if ($_SESSION['status']=='1') 
{
	 include_once 'sidebaradmin.php';
}
elseif ($_SESSION['status']=='0') {
	include_once 'sidebarsiswa.php';
}


 ?>


<?php include_once 'content.php'; ?>





<?php include_once 'footer.php';
include_once 'js.php';
 ?>


</body>

</html>