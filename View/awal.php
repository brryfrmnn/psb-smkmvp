<?php include 'preloader.php';
	 include 'home.php'; 
	 include 'caramendaftar.php'; 
	 include 'jargon.php'; 
	 include 'gelombang.php'; 
	 include 'kontak.php';
	 if (empty($_SESSION['session_id'])) {
	  	include 'login.php';
	  	 
	  } 
	  include "footer.php"; ?>