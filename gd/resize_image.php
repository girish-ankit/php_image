<?php
//header('Content-type: image/jpeg');
// Download font from site: https://www.fontsquirrel.com/fonts/list/popular

$set_width = 500;

$image_name = 'images/artinfo.jpg';
$image = imagecreatefromjpeg($image_name);
$img_resolution = 99; // for jpeg it will be 0-99 and for png it will be 0-9
// Get image Width and Height
$image_width = imagesx($image);
$image_height = imagesy($image);
$image_ration = $image_width / $image_height;

$newwidth = $set_width;
$newheight = round(($image_height / $image_width) * $set_width);


$thumb_name = 'images/resize_image.jpg';


$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($image_name);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $image_width, $image_height);

// Output and free memory
//the resized image will be 400x300
imagejpeg($thumb, $thumb_name, $img_resolution);
imagedestroy($thumb);
?>

<h1>Processed Image</h1>
<img src="<?php echo $thumb_name ?>" />

<h1>Original Image</h1>
<img src="<?php echo $image_name ?>" />



