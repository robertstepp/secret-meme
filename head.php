<?php
$debug="n";
require 'set_settings.php';
echo '<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="author" content="Robert Stepp, robert@vyperinc.ninja">
	<meta name="description" content="' . $Description . '">
	<title>' . $title . '</title>
';
require 'style/style.php';
require 'js/script.php';
require 'googleanalytics.php';
echo '
</head>
<body>
';
?>
