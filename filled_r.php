<?php
//Drawing filled rectangle
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,200,200,200);
$color=imagecolorallocate($image,0,0,255);
imagefilledrectangle($image,30,40,90,120,$color);
header('Content-Type:jpeg');
imagejpeg($image);
?>