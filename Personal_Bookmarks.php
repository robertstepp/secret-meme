<?php
require 'session.php'; // Check if Session is set //
// Page Title //
$title="Personal Bookmarks";
// Page Type //
$Type="Personal";
// Page Description //
$Description="Personal Bookmark Page to allow use at home/work/travel.";
require 'db_connect.php'; // Database Connection //
require 'head.php'; // Head portion of HTML //
require 'table.php'; // Table layout for bookmarks //
require 'test.php';
require 'footer.php'; //Footer portion of HTML //	
?>