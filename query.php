<?php
// Pull groupID information from DB based on Type defined by bookmark page //
$types = mysqli_query($con,"SELECT `groupID` AS `QgroupID`  FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE type='" . $Type . "' GROUP BY `groupID` ORDER BY `QgroupID` ASC");
// Define array of groupID information pulled from DB //
while($row = mysqli_fetch_array($types))    {
	$QgroupIDcss = $row['QgroupID'];
	// Replace spaces with underscore in groupIDs //
	$QgroupIDcss = preg_replace('/\s+/', '_', $QgroupIDcss);
	// Display groupIDs //
	echo '<table id="'.$QgroupIDcss.'_table">
	<tr>
		<th class="groupID">
			<!-- Create link on Table Header-->
			<a target="_blank" onclick="';
		$urlarray = mysqli_query($con,"SELECT * FROM bookmarks WHERE groupID='".$row['QgroupID']."'");
	while($urls = mysqli_fetch_array($urlarray))	{
		echo "window.open('".$urls['url']."'); ";
	}
	echo "\">". $row['QgroupID'] . "</a>
		</th>
	</tr>
	";
	// Pull bookmarks from DB based on groupID //
		$marks = mysqli_query($con,"SELECT `groupID`, `title`, `url`, `favicon`, `nsfw`, `home`, `inputtime` FROM `bookmarks`.`bookmarks` AS `bookmarks` WHERE groupID='" . $row['QgroupID'] . "' ORDER BY 'groupID' ASC, 'title' ASC");
	// Define array of bookmarks information pulled from DB //
	while($bookmarks = mysqli_fetch_array($marks))	{
		// Display bookmarks under groupIDs //
		echo '
		<tr class="links">
			<td class="tdlinks">
				<a href="' . $bookmarks['url'] . '" target="_blank">' . $bookmarks['title'] . '</a>
			</td>
		</tr>';
	}	
	echo '
	</table>
	';
}

mysqli_close($con);
?>