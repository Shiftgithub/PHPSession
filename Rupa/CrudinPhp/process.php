<?php
$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
$update = false;
$name = "";
$location = "";
$email = "";
$var_id = "";
$id = "";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	$mysqli->query("INSERT INTO crud(name,location,email) VALUES ('$name','$location','$email')") or die($mysqli->error);
}
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$mysqli->query("DELETE FROM crud WHERE  id =$id") or die($mysqli->error());

	$_SESSION['messege'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	header("Location: index.php");
	return;
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit']; // Getting value from index.php edit button
	$update = true;
	$result = $mysqli->query("SELECT * FROM crud WHERE  id =$id") or die($mysqli->error);
	if ($result) {
		$row = $result->fetch_assoc();

		 $name = $row['name'];
		 $location = $row['location'];
		 $email = $row['email'];
	}
}

if (isset($_POST['update'])) {
	$id = $_POST['id']; // getting value from crud.php hidden input type
	$name = $_POST['name'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	

	$mysqli->query("UPDATE crud SET name='$name',location='$location',
		  email ='$email' WHERE id=$id");

	$_SESSION['messege'] = "Information has been update!";
	$_SESSION['msg_type'] = "warning";
}