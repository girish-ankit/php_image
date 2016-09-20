<?php

header('Content-Type:image/jpeg');
$width = 500;
$height = 500;
$image = imagecreate($width, $height);
$imageColor = imagecolorallocate($image, 95, 73, 255);

imagejpeg($image);


