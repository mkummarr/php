<?php
//Creating a blanked image
$width=400;
$height=400;
//Create the image with width and height
$image=imagecreate($width,$height);

//set background color
$bgcolor=imagecolorallocate($image,255,155,255);

//Set header
header('Content-Type:image/jpeg');

//output the image
imagejpeg($image);
?>