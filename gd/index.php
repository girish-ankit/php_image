<!DOCTYPE html>
<html>
    <head>
	<title>GD Library  Demo</title>

    </head>
    <body>

	<h1>GD Library  Demo</h1>

	<?php
	if (extension_loaded('gd') && function_exists('gd_info')) {
	    $gdData = gd_info();
	    echo "PHP GD library is installed on your web server with version no: <b>" . $gdData['GD Version'] . "</b>";
	} else {
	    echo "PHP GD library is NOT installed on your web server";
	}
	?>
	<ul>
	    <li><a href="create_image.php">#1>.Create Image First</a></li>
	    <li><a href="create_save_image.php">#2>.Create Save Image</a></li>
	    <li><a href="add_text_image.php">#3>.Add Text To Image</a></li>
	    <li><a href="text_to_wallpaper.php">#4>.Add Text To WallPaper</a></li>
	    <li><a href="resize_image.php">#5>.Resize Image (Maintaining Aspect Ratio with width:200px)</a></li>
	    <li><a href="png.php">#5>.PNG Image</a></li>
	</ul>


    </body>
</html>