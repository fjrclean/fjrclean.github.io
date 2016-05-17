<!-- 
	"about" page.
-->
<!DOCTYPE html>
<html lang = "en" xmlns = "http://www.w3.org/1999/xhtml" >

<head>
	<title> wii hacking - TenuousDenizen </title>
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

			<h2 class="content_title"> Articles under the <i> wii hacking </i> category: </h2>
			<span class="important"> Site is currently under development! </span> <br />
		
	</div>
	
	<div class="rightBar">
		test
	</div>
	
	
	
	
	

</body>
</html>