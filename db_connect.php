<?php
// Create Connection
$dbname = 'localhost:3307';
$dbuser = 'username';
$dbpass = 'password';
$dbhost = 'location';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the database '$dbname'");
// Check Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " / mysqli_connect_error();
}
?>