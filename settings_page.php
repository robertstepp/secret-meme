<?php
require 'session.php'; // Check if session is set //
// Page Title //
$title = $_SESSION['sess_username'] . " Settings";
// Page Description //
$Description = "Settings for " . $_SESSION['sess_username'];
require 'db_connect.php';
require 'head.php';
require 'forms/settings.php';
require 'footer.php';
?>