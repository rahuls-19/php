<!DOCTYPE html>
<html>
<head>
	<title>String part - 2</title>
</head>
<body>
	<?php
		$msg = "Good morning Have a nice day";
		echo "{$msg} </br>" ;
		echo strstr($msg,"nice");
		echo "</br>";
		echo strlen($msg);
		echo "</br>";
		echo strpos($msg,"nice");
		echo "</br>";
		echo strchr($msg,"i");
		?>
</body>
</html>