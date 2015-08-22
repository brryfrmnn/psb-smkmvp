<?php 
session_start();
/*
Author : Berry Firmann
Email  : clickdisini@gmail.com

Web ini dibuat bertujuan untuk membantu sekolah SMK MVP ARS Internasional

*/


if (file_exists('view/main.php')) {
	require_once 'view/main.php';	
}
else
	require_once '404.php';


