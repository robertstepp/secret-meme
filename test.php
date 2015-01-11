<?php
// Create Connection
$con=mysqli_connect("localhost","root","","bookmarks");
// Check Connection
if (mysqli_connect_errno())    {
    echo "Failed to connect to MySQL: " / mysqli_connect_error();
}
$columns = 6;
$result = mysqli_query($con,"SELECT COUNT(DISTINCT groupid) as countrows from bookmarks.bookmarks where uid=1 AND type='Personal'");
$types = mysqli_query($con,"SELECT `groupID` AS `QgroupID`, 'uid' FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE type='Personal' AND uid='1' AND nsfw='1' OR type='Personal' AND uid='1' AND nsfw='0' GROUP BY `groupID` ORDER BY `QgroupID` ASC");
if($result)
	{
	while($splitrows=mysqli_fetch_row($result)){
		$rows = ceil($splitrows[0]/$columns);
		$total = $splitrows[0];
	}
}
echo $total;
$t=1;
	for ($c=1;$c<=$columns;$c++){
		echo '<table style="float:left;" id="table'.$c.'">';
		for ($i=1;$i<=$rows;$i++){
			$row = mysqli_fetch_array($types);
			echo '<tr><td>'.$row['QgroupID'].'<br></td></tr>';
			$t++;
			if($t>$total){
				break;
			}			
		}
		echo '</table>';
	}
?>