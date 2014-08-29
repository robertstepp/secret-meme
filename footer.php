<?php
$login = 'login';
if(isset($_SESSION['sess_user_id'])) {
	if(strpos($_SERVER['PHP_SELF'],$login) == false) {
		echo '<div id="logout">
		<a href="index.php"><input type="submit" name="homebutton" id="homebutton" value="Home" /></a>&nbsp;
		<a href="add_bookmarks.php"><input type="submit" name="addbutton" id="addbutton" value="Add Bookmarks" /></a>&nbsp;
		<a href="logout.php"><input type="submit" name="logoutbutton" id="logoutbutton" value="Logout" /></a>
		</div>
		<div id="searchbox"></div>';
		}
}	else  {
	echo '<div id="request">
		<a href="requestaccount.php"><input type="submit" name="requestbutton" id="requestbutton" value="Request Account" /></a>&nbsp;
	</div>';
}
echo '
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
</html>';
require 'debug.php';
?>
