<?php
require 'session.php'; // Check if Session is set //
// Page Type //
$Type=$_GET['type'];
// Page Title //
$title=$Type . " Bookmarks";
// Page Description //
$Description=$Type . " Bookmark Page to allow use at home/work/travel.";
require 'db_connect.php'; // Database Connection //
require 'head.php'; // Head portion of HTML //
require 'table.php'; // Table layout for bookmarks //
require 'footer.php'; //Footer portion of HTML //	
?>