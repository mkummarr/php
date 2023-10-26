<?php
//Drawing a line
$w=400;
$h=400;
//Create the image
$image=imagecreate($w,$h);

//Set background color
$bgcolor=imagecolorallocate($image,200,200,200);
//set line color
$lcolor=imagecolorallocate($image,0,0,0);
//Draw a line
imageline($image,10,50,100,50,$lcolor);
//set the header
header('Content-Type:image/jpeg');
//output the image
imagejpeg($image);
?>