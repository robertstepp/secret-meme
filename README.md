secret-meme
===========

Version 0.02 - Feature updates and formatting fixes
Added Local and Zulu clock with clock.js using format HH:MM:SSL | HH:MM:SSZ
Added script.php to head to simplify attachment of scripts.
Added search function but still need to fix formatting.
Changed diplay:none to tr instead of td as the rows were still appearing and messing up formatting.


Version 0.01 - Bookmark Page using PHP and SQL
Initial creation. Lists all bookmarks in DB to allow the bookmarks to be used anywhere. The pages also include an open all in new tabs by clicking on the groupID on the bookmark page. Working on design of css to organize into a better setup.

Setup
Change user/password/database in db_connect.php for your local MySQL DB.
Create database called "bookmarks".
Create table within "bookmarks" database called "bookmarks".
The structure for the table is:
Name		Type		Default			Extra	
ID 		int(11) 				Auto Increment
type		text					Required
groupID		varchar(255)				Required
title		varchar(255)				Required, Unique
url		varchar(255)				Required, Unique
favICON		varchar(255)	
nsfw		tinyint(4)				Required
home		tinyint(4)				Required
inputtime	timestamp	CURRENT_TIMESTAMP	Required

Most items are self explanatory. NSFW and HOME are true/false statements for specific queries yet to be created.
