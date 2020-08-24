<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="get" accept-charset="utf-8">

		<input type="text" name="name">
		<input type="text" name="last">
		<button type="submit" name="submit">Submit</button>
	</form>
	<?php
		$g=$_GET;

		
		if(isset($g['submit'])){
			$name = $g['name'];
			$last = $g['last'];
			if(isset($name)&& isset($last)){

				echo $name." ".$last;
			}

		}

	?>
</body>
</html>