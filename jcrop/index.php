<?php
$folder = 'images/';
$original_width = 500;
if (isset($_POST['submit'])) {

    //  print_r($_FILES);
    //   die();
    $imageFile = $_FILES['image']['tmp_name'];
    $fileName = basename($imageFile);
    echo '<img src="' . $imageFile . '" />';
}
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Image Crop Functionality</title>

    </head>
    <body>

	<h1>Image Crop Functionality</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	    <p>
		<label for="Image">Image:</label>
		<input type="file" name="image" id="image" /><br />
	    </p>
	    <p>
		<input type="submit" name="submit" value="Upload Image" />
	    </p>

	</form>

    </body>
</html>