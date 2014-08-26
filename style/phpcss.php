<?php
    header("Content-type: text/css; charset: UTF-8");
$textColor = "#f00";
$aColor = "#ff0";
$background = "/images/calm.jpg";
?>
a	{
	color: <?php echo $aColor; ?>;
}
body	{
	color: <?php echo $textColor; ?>;
	background-image: url('<?php echo $background; ?>');
	background-attachment: fixed;
}
