<?php
// Download font from site: https://www.fontsquirrel.com/fonts/list/popular
$number = rand(1, 10);

$source_file = 'images1/' . $number . '.jpg';
$image = imagecreatefromjpeg($source_file);
$img_resolution = 99; // for jpeg it will be 0-99 and for png it will be 0-9
$image_name = 'images/2-new.jpg';


$size1 = 20;
$size2 = 15;
$angle = 0;
$x = 40;
$y = 140;
$font1 = "fonts/Roboto-Medium.ttf";
$font2 = "fonts/RobotoCondensed-Light.ttf";
$font2 = $font1;
//$text1 = "123456789101112";
$text1 = "U58";
$text2 = "CHANNEL";




$white = imagecolorallocate($image, 95, 73, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Get image Width and Height
$image_width = imagesx($image);
$image_height = imagesy($image);

######################### first line of text  ###############################
// Get Bounding Box Size
$text_box1 = imagettfbbox($size1, $angle, $font1, $text1);

// Get your Text Width and Height
$text_width1 = $text_box1[2] - $text_box1[0];
$text_height1 = $text_box1[7] - $text_box1[1];

// Calculate coordinates of the text
$x1 = ($image_width / 2) - ($text_width1 / 2);
$y1 = ($image_height / 2) - ($text_height1 / 2);
echo $image_width . '--1--' . $text_width1;
//$y = ($image_height) - ($image_height / 20);

imagettftext($image, $size1, 0, $x1, $y1 - 10, $black, $font1, $text1);


######################### second line of text  ###############################
// Get Bounding Box Size

$text_box2 = imagettfbbox($size2, $angle, $font2, $text2);

// Get your Text Width and Height
$text_width2 = $text_box2[2] - $text_box2[0];
$text_height2 = $text_box2[7] - $text_box2[1];

// Calculate coordinates of the text
$x2 = ($image_width / 2) - ($text_width2 / 2);
$y2 = ($image_height / 2) - ($text_height2 / 2);
echo '<br />' . $image_width . '--2--' . $text_width2;
//$y = ($image_height) - ($image_height / 20);
// Add some shadow to the text
imagettftext($image, $size2, 0, $x2, $y2 + 10, $black, $font2, $text2);
// Add the text


$output = imagejpeg($image, $image_name, $img_resolution);


if ($output) {
    //   echo 'Image has been saved';
} else {
    echo 'Image has not been saved <br />';
}
?>


<h1>Original Image</h1>
<img src="<?php echo $source_file ?>" />
<h1>Processed Image</h1>
<img src="<?php echo $image_name ?>" />

