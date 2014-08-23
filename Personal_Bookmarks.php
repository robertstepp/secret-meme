<?php
require 'session.php'; // Check if Session is set //
// Page Title //
$title="Personal Bookmarks";
// Page Type //
$Type="Personal";
// Page Description //
$Description="Personal Bookmark Page to allow use at home/work/travel.";
// Database //
$DB="bookmarks";
require 'db_connect.php'; // Database Connection //
require 'head.php'; // Head portion of HTML //
require 'table.php'; // Table layout for bookmarks //
require 'footer.php'; //Footer portion of HTML //	
?>