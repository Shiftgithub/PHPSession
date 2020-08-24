<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Result Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$inp1 = $_POST['a'];
		$inp2 = $_POST['b'];

		echo "Php Results <br>";

	if(isset($_POST["add"])){
		$c=$inp1+$inp2;
	}

	if(isset($_POST['sub'])){
		$c=$inp1-$inp2;
	}
		
	?>
	<div style="background-color: black;">
		<h1 style="color:white;"><?php echo $c; ?></h1>
	</div>
	

</body>
</html>

