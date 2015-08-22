<?php 
include_once 'controller/autoload.php';
$imagine = new Imagine\Gd\Imagine();
//$size = new Imagine\Image\Box(500,500);
//$mode= Imagine\Image\ImageInterface::THUMBNAIL_INSET;

//->thumbnail($size, $mode)
//->save('img/home-slider/01tes.jpg');*/


use Imagine\Image\Box;
use Imagine\Image\Point;

$image=$imagine->open('img/home-slider/01.jpg');
$image->resize(new Box(500,500))
->crop(new Point (0,0), new Box(500,500))
->save('img/home-slider/01tes.jpg');
