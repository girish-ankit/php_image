<?php

$width = 500;
$height = 500;
$image = imagecreate($width, $height);
$image_name = 'images/ankit.jpg';
$imageColor = imagecolorallocate($image, 95, 73, 255);
$output = imagejpeg($image, $image_name);
if ($output) {
    echo 'Image has been saved';
} else {
    echo 'Image has not been saved';
}


