<?php
// Download font from site: https://www.fontsquirrel.com/fonts/list/popular


$width = 300;
$height = 300;
$image = imagecreate($width, $height);
$image_name = 'images/test-image.jpg';
$img_resolution = 99; // for jpeg it will be 0-99 and for png it will be 0-9


$size = 30;
$angle = 0;
$x = 40;
$y = 140;
$font = "fonts/Roboto-Bold.ttf";
$text = "Amrit Kaushik";


$white = imagecolorallocate($image, 95, 73, 255);
$grey = imagecolorallocate($image, 128, 128, 128);
$black = imagecolorallocate($image, 255, 255, 255);

// Get image Width and Height
$image_width = imagesx($image);
$image_height = imagesy($image);

// Get Bounding Box Size
$text_box = imagettfbbox($size, $angle, $font, $text);

// Get your Text Width and Height
$text_width = $text_box[2] - $text_box[0];
$text_height = $text_box[7] - $text_box[1];

// Calculate coordinates of the text
$x = ($image_width / 2) - ($text_width / 2);
$y = ($image_height / 2) - ($text_height / 2);



// Add some shadow to the text
imagettftext($image, $size, 0, $x, $y + 5, $grey, $font, $text);
// Add the text
imagettftext($image, $size, 0, $x, $y, $black, $font, $text);

$output = imagejpeg($image, $image_name, $img_resolution);


if ($output) {
    //   echo 'Image has been saved';
} else {
    echo 'Image has not been saved <br />';
}
?>


<img src="<?php echo $image_name ?>" />


