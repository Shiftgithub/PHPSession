<!DOCTYPE html>
<html>
<head>
	<title>
		GPA
	</title>
</head>
<body>
	<form method="post" accept-charset="utf-8">
		<input type="text" name="mark">

		<input type="submit" value="Submit">
	</form>

	<?php
		// echo $_SERVER['REQUEST_METHOD'];
		if ( $_SERVER['REQUEST_METHOD'] == "POST"){

			echo $a = $_POST['mark'];

			echo "<hr>";

			IF(IS_numeric($a))
			{
				if($a <= 100 && $a >79){
					echo "A+";
				}
				elseif($a<80 && $a >49){
					echo "A";
				}
				elseif($a<50 && $a>33 ){
					echo "A-";
				}
				elseif($a<34 && $a>=0){
					echo "F";
				}
				else echo "invalid";
			} 
			else echo "Not a Number";
			
		}
	?>
</body>
</html>