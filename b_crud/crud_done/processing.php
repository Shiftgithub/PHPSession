<?php
  session_start();
  include 'db_connection.php';

    $name = "";
    $email = "";
    $password = "";
    $delete = "";
    $update = false;

  if (isset($_POST['submit'])) {

    
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$insert ="INSERT INTO details(name,email,password) VALUES('$name','$email','$password')";
  	$connection->query($insert); 
    
    $_SESSION['message'] = "SAVED SUCCESSFULLY";
    $_SESSION['color'] = "success";

     header('location: index.php');
  }


  if(isset($_GET['delete'])){

      

     	$id = $_GET['delete'];
     	$connection->query("DELETE FROM details WHERE  id =$id") or die($connection->error());
      $_SESSION['message'] = "DELETED SUCCESSFULLY";
      $_SESSION['color'] = "danger";
       header('location: index.php');
	 }

//edit section

  if(isset($_GET['id'])) {

    $id = $_GET['id'];//
    $rows = $connection->query("SELECT * FROM details WHERE id=$id") or die($connection->error());
    $update = true;

    if($rows == true){
      $row = $rows->fetch_array();
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $password = $row['password'];
    }
   }


    //update section
   if (isset($_POST['update'])){
      
      $id = $_POST['id']; 
      // var_dump($_POST);
      // die();
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $connection->query("UPDATE details SET name='$name',email ='$email',password='$password' WHERE id=$id");

    $_SESSION['message'] = "UPDATED SUCCESSFULLY";
    $_SESSION['color'] = "info";

    header('location: index.php');
      }

 ?>