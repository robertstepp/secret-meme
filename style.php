<?php
echo '	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/main.css" />
	<link rel="stylesheet" type="text/css" href="style/class.css" />
	<link rel="stylesheet" type="text/css" href="style/id.css">
	<link rel="stylesheet" type="text/css" href="style/phpcss.php" />
	<style>
	';
if (isset($Type)) {
	$types = mysqli_query($con,"SELECT `groupID` AS `QgroupID`  FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE type='" . $Type . "' GROUP BY `groupID` ORDER BY `QgroupID` ASC");
		// Define array of groupID information pulled from DB //
		while($row = mysqli_fetch_array($types))    {
		// Replace spaces with underscore in groupIDs //
		$row['QgroupID'] = preg_replace('/\s+/', '_', $row['QgroupID']);
		// Display groupIDs //	
		echo "#".$row['QgroupID']."_table:hover tr.links{display: inline;}
		";
		}
}
echo '
	html	{		
		height: '.$_GET['height'].'px;
		width: '.$_GET['width'].'px;
	}
	</style>
	';
?>