<?php require_once "process.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
		.btn {
			margin: 5px;
			padding: 5px;
		}

		#insert {
			margin-left: 60px;
		}

		.info {
			background-color: #efeff5;
			padding: 70px;
			width: 100%;


		}
	</style>

	<title>Information Edit</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	
	 <?php 
	 if(isset($_SESSION['messege'])): ?>
      <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
         <?php 
            
             echo "<center><h3>".$_SESSION['messege']."</h3></center>";
             unset ($_SESSION['messege']);
         ?>
      </div>
      <?php endif; ?>
     <?php
	$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
	$result = $mysqli->query("SELECT* FROM crud") or die($mysqli->error);
	//pre_r($result);
	// pre_r($result->fetch_assoc());

	?>
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-info"> Show Information</h1>
			<table border="1" class="table table-hover table-dark">
				<thead>
					<th>Name</th>
					<th>Location</th>
					<th>Email</th>
					<th colspan="2">Action</th>
				</thead>
				<?php
				while ($row = $result->fetch_assoc()) { ?>

					<tr>
						<td><?php echo $row['name']; ?> </td>
						<td><?php echo $row['location']; ?> </td>
						<td><?php echo $row['email']; ?> </td>
						<td>
							<!-- Edit Button -->
							<a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
							<!-- Delete Button -->
							<a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<div class="row justify-content-center">
		<form method="POST">
			<input type="hidden" name="id" value="<?= $id ?>">
			<div class="info">
				<div class="form-group">
					<h1 class="text-info" id="insert"> Insert Information</h1>
					<label>Name</label>
					<input type="text" <?php if (isset($_GET['edit']))?>  value= "<?php echo $name ?>" name="name" class="form-control" required="" style="padding: 10px;">
				</div>
				<div class="form-group">
					<label>location</label>
					<input type="text" <?php if (isset($_GET['edit']))?>  value= "<?php echo $location ?>"name="location" class="form-control" required="" style="padding: 10px;">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="email" <?php if (isset($_GET['edit']))?>  value= "<?php echo $email ?>" name="email" class="form-control"  required="" style="padding: 10px;">
				</div>

				<?php
				if ($update == true) : ?>

					<button type="submit" class="btn btn-warning" name="update">Update</button>
				<?php else :

				?>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>

				<?php endif; ?>

			</div>
	

	</form> 
	</div>



</body>

</html>