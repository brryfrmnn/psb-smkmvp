<?php
/*
captcha.php
*/
session_start();
$character="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";

$text = "";
$panjang = 5; //panjang password
for ($i=0; $i < $panjang; $i++) { 
	$text .= $character[rand(0,33)];
}
$_SESSION["captcha"] = strtolower($text);
$width = 65;
$height = 25;
$font_size = 14;

$image_p = imagecreate($width,$height);
$white = imagecolorallocate($image_p,0,0,0);
$black = imagecolorallocate($image_p,225,225,225);

imagestring($image_p,$font_size,5,5,$text,$black);
imagejpeg($image_p,null,80);
?>