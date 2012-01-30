<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Ultimate Fitness Home</title>
	</head>
	<body>
		
		<?php
			require_once("templates/header.html");
			require_once("internals/classes/TemplateBodyLoader.php");
			echo '<div id="body">';
			TemplateBodyLoader::loadBody($_GET["page"]);
			echo "</div>";
		?>
    	</div>	
	</body>
</html>
