<?php
echo '<script language="JavaScript"> 
		window.onresize = function screensize()	{
	<!--
    document.location="'.$_SERVER['PHP_SELF'].'?resolution=1&width="+window.innerWidth+"&height="+window.innerHeight;      
	//-->
	}
	</script>
';
echo '	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/clock.js"></script>
	<script type="text/javascript" src="js/settings.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript" src="js/validation.js"></script>
	';
if(isset($_GET['result']))	{
	if ($_GET['result'] == 'failure')	{
	echo '	<script type="text/javascript" src="js/failure.js"></script>
	';
}	else if ($_GET['result'] == 'success')	{
	echo '	<script type="text/javascript" src="js/success.js"></script>';
}
}
?>

    