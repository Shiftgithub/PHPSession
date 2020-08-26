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
if($_SERVER["REQUEST_METHOD"] == "POST")

{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	}
	
	echo"Name :".$username. "<br> 
	 Email :".$email."<br>
	 password :".$password."<br>";
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