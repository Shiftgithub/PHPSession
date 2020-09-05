<html>

<head>
	<style type="text/css">
		table {
			margin:30px;
			width: 40%;
			background: linear-gradient(to bottom, #99ccff 0%, #ccffff 100%);
			color:black;
			font-size: 25px;
		}

	</style>
</head>
<boby>


	<?php

	if (isset($_POST["btn"])) {
		$search = $_POST["search"];
		$s = fopen("$search.txt", "r") or die("File doesn't exist");
		echo fread($s, filesize("$search.txt"));
		fclose($s);
	}

	if (isset($_POST["save"])) {
		$username = $_POST["username"];
		$name=$_POST["name"];
		$number=$_POST["number"];
        $email = $_POST["email"];
		$address = $_POST["address"];



		echo "<table border=1><tr><td>
		      Student's Name :</td><td>" . $name . "</td></tr> 
		      <tr><td>ID :</td><td>" . $username . "</td> </tr>
		      <tr><td>Email :</td><td>" . $email . "</td> </tr>
			<tr><td>Contact Number :</td><td>" . $number . "</td> </tr>
			<tr><td>Address :</td><td>" . $address . "</td> </tr></table>";
			echo "<br><a href='searchinform.php'><input type='submit'value='Home' name='back'></a> ";

		extract($_REQUEST);
		if ($file = fopen("$username.txt", "a")); {

			fwrite($file, "<table border=1><tr><td>Student's ID :</td><td>");
			fwrite($file, $username . "</td></tr>");
			fwrite($file, "<tr><td>Name :</td><td>");
			fwrite($file, $name . "</td></tr>");
			fwrite($file, "<tr><td>Email :</td><td>");
			fwrite($file, $email . "</td></tr>");
			fwrite($file, "<tr><td>Contact number :</td><td>");
			fwrite($file, $number."</td></tr>");
			fwrite($file, "<tr><td>Address :</td><td>");
			fwrite($file,$address."</td></tr>");
			fclose($file);
		}
	}
	?>
	</body>

</html>