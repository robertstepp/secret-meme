<?php
require '../session.php';
    header("Content-type: text/css; charset: UTF-8");
$textColor = "#f00";
$aColor = "#ff0";
$background = "/images/calm.jpg";
if (isset($_SESSION['userbackground']))  {
	$background = "/upload/" . $_SESSION['userbackground'];
}
if(isset($_SESSION['userbackgroundcolor'])) {
	$backgroundcolor = $_SESSION['userbackgroundcolor'];
}
if(isset($_SESSION['fontsize']))	{
	$fontsize = $_SESSION['userfontsize'];
}
if(isset($_SESSION['userfontcolor'])) {
	$textColor = $_SESSION['userfontcolor'];
	$aColor = $_SESSION['userfontcolor'];
}



?>
a	{
	color: <?php echo $aColor; ?>;
}
body	{
	color: <?php echo $textColor; ?>;
	background-image: url('<?php echo $background; ?>');
	font-size: <?php echo $fontsize; ?>em;
	background-color: <?php echo $backgroundcolor; ?>
}
