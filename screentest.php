<?php
    if(!isset($_GET['resolution'])) {     
        echo "<script language=\"JavaScript\">     
<!--      
    document.location=\"$PHP_SELF?resolution=1&width=\"+browser.width+\"&height=\"+browser.height;     
//-->     
</script>";     
    } else {
        // Code to be displayed if resolution is detected     
        if(isset($_GET['width']) && isset($_GET['height'])) {     
            echo "Width: " . $_GET['width'] . " and Height: " . $_GET['height'] . "<br />";
        }     
    }
?>