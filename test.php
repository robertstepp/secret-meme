<?php
$debug = "n";
$Type='Personal';
$con=mysqli_connect("localhost","root","","bookmarks");
$columns = 5;
echo '<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="author" content="Robert Stepp, robert@vyperinc.ninja">
';
echo '	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/class.css" />
	<link rel="stylesheet" type="text/css" href="style/id.css" />
	<style>
';
if (isset($Type)) {
	$types = mysqli_query($con,"SELECT `groupID` AS `QgroupID`  FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE type='" . $Type . "' GROUP BY `groupID` ORDER BY `QgroupID` ASC");
		// Define array of groupID information pulled from DB //
		while($row = mysqli_fetch_array($types))    {
		// Replace spaces with underscore in groupIDs //
		$row['QgroupID'] = preg_replace('/\s+/', '_', $row['QgroupID']);
		// Display groupIDs //	
		echo "#".$row['QgroupID'].":hover + tr.links{display:inline;}#".$row['QgroupID'].":hover{color:black;}
		
		";
		}
}
	for($q=1;$q<=$columns;$q++){
			echo "#table".$q."{width:250px;}";
		}
echo '
	</style>
	';
echo '
</head>
<body>
';

$result = mysqli_query($con,"SELECT COUNT(DISTINCT groupid) as countrows from bookmarks.bookmarks where uid=1 AND type='Personal'");
$types = mysqli_query($con,"SELECT `groupID` AS `QgroupID`, 'uid' FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE type='Personal' AND uid='1' AND nsfw='0' OR type='Personal' AND uid='1' AND nsfw='0' GROUP BY `groupID` ORDER BY `QgroupID` ASC");
if($result)
	{
	while($splitrows=mysqli_fetch_row($result)){
		$rows = ceil($splitrows[0]/$columns);
		$total = $splitrows[0];
	}
}
$t=1;
	for ($c=1;$c<=$columns;$c++){
		echo '<table style="float:left;" id="table'.$c.'">';
		for ($i=1;$i<=$rows;$i++){
			$row = mysqli_fetch_array($types);
			$QgroupIDcss = $row['QgroupID'];
			// Replace spaces with underscore in groupIDs //
			$QgroupIDcss = preg_replace('/\s+/', '_', $QgroupIDcss);
			// Display groupIDs //
			echo '<tr id="'.$QgroupIDcss.'"><th class="groupID"><a target="_blank" onclick="';
			$urlarray = mysqli_query($con,"SELECT * FROM bookmarks WHERE groupID='".$row['QgroupID']."'");
			$urls = mysqli_fetch_array($urlarray);
			echo "window.open('".$urls['url']."'); ";
			echo "\">". $row['QgroupID'] . "</a></th></tr>";
			// Pull bookmarks from DB based on groupID //
		$marks = mysqli_query($con,"SELECT `groupID`, `title`, `url`, `favicon`, `nsfw`, `home`, `inputtime` FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE groupID='" . $row['QgroupID'] . "' ORDER BY 'groupID' ASC, 'title' ASC");
	// Define array of bookmarks information pulled from DB //
	while($bookmarks = mysqli_fetch_array($marks))	{
		// Display bookmarks under groupIDs //
		echo '
		<tr class="links">
			<td class="tdlinks">';
			if (!empty($bookmarks['favicon']))  {
				echo '<img src="' . $bookmarks['favicon'] . '" height="16" />';
		}
		echo '<a href="' . $bookmarks['url'] . '" target="_blank">' . $bookmarks['title'] . '</a>
			</td>
		</tr>';
	}	
			$t++;
			if($t>$total){
				break;
			}			
		}
		echo '</table>';
	}
echo '</body>
</html>';
?>