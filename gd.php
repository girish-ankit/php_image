<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$imagepath = 'resize_image.jpg';

echo '<h1>Function : gd_info()</h1>';
echo '<pre>';
print_r(gd_info());
echo '</pre>';


echo '<h1>Function : getImageSize()</h1>';
echo '<pre>';
print_r(getImageSize($imagepath));
echo '</pre>';
list($width, $height) = getImageSize($imagepath);
echo'<p>Width of Image: ' . $width . ' pixels</p>';
echo'<p>Height of Image: ' . $height . ' pixels</p>';

echo '<h1>Function : filesize()</h1>';
echo 'This fuction will give file size in byte: ';
echo '<b>' . filesize('resize_image.jpg') . '</b>';
?>