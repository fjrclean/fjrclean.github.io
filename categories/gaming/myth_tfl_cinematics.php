<!-- 
	"about" page.
-->
<!DOCTYPE html>
<html lang = "en" xmlns = "http://www.w3.org/1999/xhtml" >

<head>
	<title> Myth Cinematics </title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="icon" type="image/png" href="/background.png" />
</head>

<body>

	<div class="site_banner">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/site_banner.php';
			include($path); 
		?>
		
	</div>
	
	<div class="leftBar">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/browse_categories.php';
			include($path); 
		?>
	</div>
	
	<div class="content">

			<h2 class="content_title"> Original cinematics for Bungie's classic, Myth: The Fallen Lords.</h2>
			
			<div class="basics">
				You can also play the Myth: The Fallen Lords campaign in Myth II. You can get the Myth 2 plugin for this <a href="http://projectmagma.net/downloads/TFL_Solo/">here</a>.
				To have the cinematics with these ported levels, create a <code>cutscenes</code> directory in your Myth 2 install directory, and place the <code>cutscene.gor</code> in it. You can get larger sized Quicktime verions of the cinematics from <a href="http://tain.totalcodex.net/items/show/myth-tfl-quicktime-cutscenes">here</a>.
			</div>
			
			Unfortunately, the Myth game series is not freeware despite the first entry being released back in 1997. So I'll leave the procuring of the game up to you. However you may find your copy lacking the animated cinematics (not the same as the narrated pre-mission briefings) and intro video. <br /><br />
			
			For these, you'll need to have a copy of The Fallen Lords CD mounted when playing, or copy the <code>cutscene.gor</code> file from the cd into the <code>/tags</code> folder under your Myth install directory. For me the intro is only played automatically with the CD mounted, however either way you can watch it with the <code>replay intro</code> option in the main menu. <br /><br />
			
			I've uploaded the <code>cutscene.gor</code> file <a href="https://mega.nz/#!QdhxzCKR!0zDtqWb8hZB3GxZTmr7zP7VHeG4B4iFUxgl6G9WiOa8">here</a>. If that is no longer working, <a href="/contact.php">contact</a> me.
			
		
	</div>
	
	<div class="rightBar">
		test
	</div>
	
	<div class="comments">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/comments.php';
			include($path); 
		?>
	</div>
	
	
	
	
	

</body>
</html>