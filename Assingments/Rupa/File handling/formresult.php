<html>
<head>
	<style type="text/css">
		table
		{
		 background: linear-gradient(to bottom, #0000ff 0%, #66ccff 100%);
		color: white;
		}
	</style>
</head>
<boby>

<?php
$search=$_POST["search"];

if($_SERVER["REQUEST_METHOD"] == "POST")

{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
if ($search==$username) {
	echo"Name :".$username. "<br> 
	 Email :".$email."<br>
	 password :".$password."<br>";
}
	}
	
	echo"Name :".$username. "<br> 
	 Email :".$email."<br>
	 password :".$password."<br><a href='search in form.php'><input type='submit'value='Home' name='back'></a> ";

	 extract($_REQUEST);
if($file=fopen("save info.txt", "a"));
{
fwrite($file, "Name :");
fwrite($file, $username ."\n");
fwrite($file, "Email :");
fwrite($file, $email ."\n");
fwrite($file, "Password :");
fwrite($file, $password ."\n");
fclose($file);
}
?>
</body>
</html>