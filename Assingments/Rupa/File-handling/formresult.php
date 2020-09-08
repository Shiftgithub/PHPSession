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

	if (isset($_POST["btn"]))/*Output for search button */
	 {
		$search = $_POST["search"]; /*Stored the searched id*/

		$s = fopen("Textdoc/$search.txt", "r") or die("File doesn't exist"); /* Opened the file of searched id if exist,otherwise show the given message*/ 
		echo fread($s, filesize("Textdoc/$search.txt")); /* Read the information of the file and show to the user */
		fclose($s); /* Close the file */
	}
      
	if (isset($_POST["save"])) /*Results for 'save' button */
	  {
	  	/*Storing form information in variables */
		$username = $_POST["username"];
		$name=$_POST["name"];
		$number=$_POST["number"];
        $email = $_POST["email"];
		$address = $_POST["address"];


         /*Showing output in a table */
		echo "<table border=1><tr><td>
		      Student's Name :</td><td>" . $name . "</td></tr> 
		      <tr><td>ID :</td><td>" . $username . "</td> </tr>
		      <tr><td>Email :</td><td>" . $email . "</td> </tr>
			<tr><td>Contact Number :</td><td>" . $number . "</td> </tr>
			<tr><td>Address :</td><td>" . $address . "</td> </tr></table>";
			/*Back button for Home page*/
			echo "<br><a href='searchinform.php'><input type='submit'value='Home' name='back'></a> ";

		extract($_REQUEST);/*For Store form data*/

		if ($file = fopen("Textdoc/$username.txt", "a")); /*Opening a file named of given id by user*/
		{

			fwrite($file, "<table border=1><tr><td>Student's ID :</td><td>"); /*Writing information in opened file */
			fwrite($file, $username . "</td></tr>"); 
			fwrite($file, "<tr><td>Name :</td><td>");
			fwrite($file, $name . "</td></tr>");
			fwrite($file, "<tr><td>Email :</td><td>");
			fwrite($file, $email . "</td></tr>");
			fwrite($file, "<tr><td>Contact number :</td><td>");
			fwrite($file, $number."</td></tr>");
			fwrite($file, "<tr><td>Address :</td><td>");
			fwrite($file,$address."</td></tr>");
			fclose($file); /* Close the file */
		}
	}
	?>
	</body>

</html>