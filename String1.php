<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>
	<?php
		$first = "Good Morning ";
		$second = "Have a nice day";
		$third = "$first" ;
		echo $third ;
		echo "</br>" ;
		$third .= $second ;
		echo $third ;
		echo "</br>" ;
		echo strtoupper($first);
		echo "</br>" ;
		echo strtolower($second);
		echo "</br>" ;
		echo ucwords($third);
		?>

</body>
</html>