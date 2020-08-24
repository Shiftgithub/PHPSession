<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php
	$cars = array (
		  array("Volvo",22,18), //[0]
		  array("BMW",15,13),	
		  array("Saab",5,2),
		  array("Land Rover",17,15)
	);
    

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

?> 

</body>
</html>
