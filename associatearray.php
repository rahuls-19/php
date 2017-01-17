<!DOCTYPE html>
<html>
<head>
	<title>Associated Array</title>
</head>
<body>
<?php
    $arr =["name" => "Rahul Kumar", "College name" => "IIITA"];
    echo $arr["name"]. "<br/>";
    echo $arr["College name"];
    $array = [["name" => "Rahul Kumar", "College name" => "IIITA"],["name1" => "Rahul Kumar", "College name1" => "IIITA"]];
    echo $array[0]["name"];
    ?>
</body>
</html>