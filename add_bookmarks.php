<?php
require 'session.php'; // Check if Session is set //
// Page Title //
$title="Add Bookmarks";
// Page Description //
$Description="Add bookmarks to your account";
require 'db_connect.php';
require 'head.php';
require 'forms/addbookmarks.php';
require 'footer.php';
?>