<?php
	
	$con = new mysqli('localhost','root','','mydatabase');
	// Insert data 
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
	
	$result = "INSERT INTO info (name,email) VALUES('$name','$email')";

		if ($con->query($result)==true) {
			echo "Success";
		}else
			echo "Error";
	}

	// Delete data


	if (isset($_POST['delete'])) {

	$del = "DELETE FROM info WHERE id=13";

		if ($con->query($del)==true) {
			echo "delete Success<br>";
		}else
			echo "delete failed<br>";
	}

	// Read data

	$sql = "SELECT * FROM info";
	$read = $con->query($sql);

	if ($read->num_rows>0) {
		// echo "<pre>";
		while($row = $read->fetch_assoc()) {
			// var_dump($row);
    echo $row['id']."___ Name: " . $row["name"]. " ----------------   Email: " . $row["email"]. "<br><br>";
  		}
	}


	

		//header('Location: index.php');
		echo '<a href="index.php"><button>Back</button>';

		
?>