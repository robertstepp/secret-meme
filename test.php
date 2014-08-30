<?php
$url = "https://www.facebook.com/";
$baseurl = strpos($url,'/',$offset=9);
$favicon = substr($url, 0, $baseurl) . "/favicon.ico";
echo "<!DOCTYPE html><html><body>$favicon<img align='center' src='$favicon' /></body></html>";
?>