<?php
//Image with text
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,0,0,0);
$text="Hello This is Salim";
$textcolor= imagecolorallocate($image,255,255,255);
$fontsize=5;
imagestring($image,$fontsize,50,100,$text,$textcolor);
header('Content-Type:jpeg');
imagejpeg($image);
?>