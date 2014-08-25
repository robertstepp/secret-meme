<?php
// Create Connection
$con=mysqli_connect("localhost","root","","bookmarks");
// Check Connection
if (mysqli_connect_errno())    {
    echo "Failed to connect to MySQL: " / mysqli_connect_error();
}
?>