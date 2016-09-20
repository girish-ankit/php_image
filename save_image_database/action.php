<?php

require 'database.php';

$gpc_chk = get_magic_quotes_gpc();
if (isset($_POST['submit'])) {
    $imageFile = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];

    if (getimagesize($imageFile) == 0) {
	echo 'Please upload image';
    } else {
	$imageData = file_get_contents($imageFile);
	$image_encode = base64_encode($imageData);

	if (!$gpc_chk) {
	    $fileName = addslashes($fileName);
	    $image_encode = addslashes($image_encode);
	}
	save_image($fileName, $image_encode);

	redirect('index.php');
    }
}

function save_image($fileName, $imageFile) {
    mysql_query("INSERT INTO images (name, image) VALUES ('$fileName', '$imageFile')");
}

?>
