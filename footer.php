<?php

echo '
<div id="logout"><a href="logout.php"><input type="submit" name="button" id="button" value="Logout" /></a></div>
<div id="clockbox"></div>
<p id="footer">&copy; 
		<script type="text/javascript">
			var d = new Date();
			document.write(d.getFullYear());
			var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
			document.write(" " + monthname[d.getMonth()] + " | ");
		</script>
	Vyper, Inc</p>
</body>
</html>'
?>
