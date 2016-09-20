<?php

$host = 'localhost';
$db_user = 'root';
$db_password = 'htp@123';
$db_name = "php_image";

$conn = @mysql_connect($host, $db_user, $db_password);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$db_create = mysql_query("CREATE DATABASE IF NOT EXISTS " . $db_name);

$db_select = mysql_select_db($db_name, $conn);


$table = <<<EOD
"CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250)  NOT NULL default '',
  `image`  BLOB,
  PRIMARY KEY ( id )
 )"
EOD;


$table_create = mysql_query($table);

if ($table_create) {
    die(mysql_error());
}

function dispaly_image() {
    $output = '';
    $result = mysql_query("SELECT * FROM images");
    $output .= '<ul>';
    while ($row = mysql_fetch_array($result)) {
	$output .= '<li><p>' . $row['name'] . '</p><img src="data:img;base64,' . $row['image'] . '" title="' . $row['name'] . '"  height="300" width="300"/></li>';
    }

    $output .= '</ul>';

    return $output;
}

function redirect($url) {
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
