<?php
//Drawing a rectangle
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,200,200,200);
$lcolor=imagecolorallocate($image,0,0,0);
imagerectangle($image,30,40,90,120,$lcolor);
header('Content-Type:image/jpeg');
imagejpeg($image);
?>