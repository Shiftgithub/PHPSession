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
			echo "<br><a href='search in form.php'><input type='submit'value='Home' name='back'></a> ";

		extract($_REQUEST);
		if ($file = fopen("$username.txt", "a")); {

			fwrite($file, "Student's ID :");echo "</td><td>";
			fwrite($file, $username . "\n");echo "</td></tr>";
			fwrite($file, "Name :");
			fwrite($file, $name . "\n");
			fwrite($file, "Email :");
			fwrite($file, $email . "\n");
			fwrite($file, "Contact number :");
			fwrite($file, $number."\n");
			fwrite($file, "Address :");
			fwrite($file,$address."\n");
			fclose($file);
		}
	}
	?>
	</body>

</html>