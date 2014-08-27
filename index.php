<?php
require 'session.php'; // Check if Session is set //
// Page Title //
$title="Bookmark Home";
// Page Description //
$Description="Home Bookmark Page to allow use at home/work/travel.";
require 'db_connect.php'; // Database Connection //
require 'head.php'; // Head portion of HTML //
require 'indexquery.php'; // Index bookmarks //
require 'links.php'; //Links to other pages //
require 'footer.php'; // Footer portion of HTML //	
?>