<?php
// Download font from site: https://www.fontsquirrel.com/fonts/list/popular




$originalImage = "images1/1.png";
if (file_exists($originalImage)) {
    $im = imagecreatefrompng($originalImage);

    imagesavealpha($im, true); // important to keep the png's transparency
    if (!$im) {
	die("im is null");
    }
    $black = imagecolorallocate($im, 128, 128, 128);
    $width = 300; // the width of the image
    $height = 300; // the height of the image
    $font = 20; // font size
    $digit = $i; // digit
    $leftTextPos = 19 - (strlen($digit) * 3);
    $outputImage = "images/group_icon_" . $digit . ".png";
    imagestring($im, $font, $leftTextPos, 9, $digit, $black);
    imagepng($im, $outputImage, 0);
    imagedestroy($im);
}
?>
<img src="<?php echo $outputImage ?>" />

