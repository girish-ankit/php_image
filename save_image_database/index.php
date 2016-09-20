<?php require 'database.php'; ?>

<!DOCTYPE html>
<html>
    <head>
	<title>Image Crop Functionality</title>

    </head>
    <body>

	<h1>Image Crop Functionality</h1>
	<form action="action.php" method="post" enctype="multipart/form-data">
	    <p>
		<label for="Image">Image:</label>
		<input type="file" name="image" id="image" /><br />
	    </p>
	    <p>
		<input type="submit" name="submit" value="Upload Image" />
	    </p>

	</form>

	<div>
	    <?php echo dispaly_image(); ?>
	</div>

    </body>
</html>