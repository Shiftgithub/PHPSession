<html>

<head>
	<style type="text/css">
		table {
			background: linear-gradient(to bottom, #0000ff 0%, #66ccff 100%);
			color: white;
		}
	</style>
</head>
<boby>

	<?php
	$btn = $_POST["btn"];

	$search = $_POST["search"];
	if (isset($_POST[$btn])) {

		fopen("$username.txt", a);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		if ($search == $username) {
			echo "Name :" . $username . "<br> 
			Email :" . $email . "<br>
			password :" . $password . "<br>";
		}
	}

	echo "Name :" . $username . "<br> 
		Email :" . $email . "<br>
		password :" . $password . "<br><a href='search in form.php'><input type='submit'value='Home' name='back'></a> ";

	extract($_REQUEST);
	if ($file = fopen("$username.txt", "a")); {


		fwrite($file, "Name :");
		fwrite($file, $username . "\n");
		fwrite($file, "Email :");
		fwrite($file, $email . "\n");
		fwrite($file, "Password :");
		fwrite($file, $password . "\n");
		fclose($file);
	}
	?>
	</body>

</html>